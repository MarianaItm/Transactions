<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Services\PayPalService;
use App\Services\TransactionService;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\DTO\Transaction as TransactionDTO;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * @var PayPalService
     */
    private PayPalService $payPalService;

    /**
     * @var UserService
     */
    private UserService $userService;

    /**
     * @var TransactionService
     */
    private TransactionService $transactionService;

    /**
     * @param PayPalService $payPalService
     * @param UserService $userService
     * @param TransactionService $transactionService
     */
    public function __construct(
        PayPalService $payPalService,
        UserService $userService,
        TransactionService $transactionService
    ) {
        $this->payPalService = $payPalService;
        $this->userService = $userService;
        $this->transactionService = $transactionService;
    }

    /**
     * Muestra el formulario para consultar una transacción.
     */
    public function index(): View
    {
        return view('transaction');
    }

    /**
     * Consulta el estado de una transacción por ID usando la API de PayPal.
     * @param Request $request
     */
    public function show(Request $request)
    {
        $transactionId = $request->input('transaction_id');

        if (!$transactionId) {
            return redirect()->route('transaction.index')
                ->with('result', 'Debe ingresar un ID de transacción.');
        }

        try {
            $response = $this->payPalService->getOrderDetails($transactionId);

            if (!empty($response['status'])) {
                $transaction = $this->transactionService->findByTransaction($transactionId);

                if (!is_null($transaction)) {
                    // Comparar el valor del enum (string) con el estado de PayPal
                    if ($transaction->getStatus()->value !== $response['status']) {
                        $transaction->setStatus($response['status']);
                        $this->transactionService->update($transaction);
                        // Refrescar la transacción después de actualizar
                        $transaction = $this->transactionService->findByTransaction($transactionId);
                    }

                    $transactionArray = $transaction->toArray();

                    session()->flash('transaction', $transactionArray);
                    return redirect()->route('transaction.index')
                        ->with('result', 'Estado de la transacción: ' . $transaction->getStatus()->value);
                }

            } else {
                return redirect()->route('transaction.index')
                    ->with('result', 'No se encontró información de la transacción.');
            }

        } catch (\Exception $e) {
            return redirect()->route('transaction.index')
                ->with('result', 'Error al consultar la transacción: ' . $e->getMessage());
        }
    }

    /**
     * Muestra el formulario para ingresar monto y redirige a PayPal.
     */
    public function topupForm()
    {
        $user = $this->userService->getUserMe();
        if (is_null($user->getId())) {
            return back()->with('error', 'Ocurrió un error al obtener el usuario.');
        }

        $transactions = $this->transactionService->findByUser($user->getId());

        $user->setTransactions(...$transactions);
        $user = $user->toArray();
        return view('topup', compact('user'));
    }

    /**
     * Crea una orden de pago en PayPal con el monto ingresado.
     * @param Request $request
     */
    public function createOrder(Request $request)
    {
        $amount = $request->input('amount');

        // Crear orden en PayPal
        $response = $this->payPalService->createOrder($amount);

        if (isset($response['id']) && $response['status'] === 'CREATED') {
            // Guardar la transacción solo si se creó correctamente en PayPal
            $user = $this->userService->getUserMe();
            if (is_null($user->getId())) {
                return back()->with('error', 'Ocurrió un error al obtener el usuario.');
            }

            $transaction = new TransactionDTO();
            $transaction->setUserId($user->getId());
            $transaction->setTransactionId($response['id']);
            $transaction->setStatus($response['status']);
            $transaction->setAmount($amount);
            $this->transactionService->create($transaction);

            // Redirigir al usuario a PayPal
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return back()->with('error', 'No se pudo crear la orden.');
    }

    /**
     * Procesa el pago exitoso en PayPal.
     * @param Request $request
     */
    public function paypalSuccess(Request $request)
    {
        $transactionId = $request->get('token');
        $response = $this->payPalService->captureOrder($transactionId);

        if (!empty($response['status']) && $response['status'] === 'COMPLETED') {
            $transaction = $this->transactionService->findByTransaction($transactionId);

            if (!is_null($transaction) && $transaction->getStatus()->value !== $response['status']) {
                $transaction->setStatus($response['status']);
                $this->transactionService->update($transaction);

                $user = $this->userService->findById($transaction->getUserId());
                if (!is_null($user)) {
                    $user->increment($transaction->getAmount());
                    $this->userService->update($user);
                }
            }
        }

        return redirect()->route('topup.form')->with('result', 'Pago completado correctamente.');
    }

    /**
     * Procesa el pago cancelado en PayPal.
     */
    public function paypalCancel(Request $request)
    {
        $transactionId = $request->get('token');

        if (!$transactionId) {
            return redirect()->route('topup.form')->with('error', 'La transacción no fue identificada.');
        }

        try {
            $transaction = $this->transactionService->findByTransaction($transactionId);

            if (is_null($transaction)) {
                return redirect()->route('topup.form')->with('error', 'La transacción no fue encontrada.');
            }

            // Solo cancelar si está en estado CREATED
            if ($transaction->getStatus() !== TransactionStatus::CREATED) {
                return redirect()->route('topup.form')->with('error', 'La transacción no puede ser cancelada en este estado.');
            }

            // Actualizar a CANCELED
            $transaction->setStatus(TransactionStatus::CANCELED);
            $this->transactionService->update($transaction);

            return redirect()->route('topup.form')->with('error', 'El pago fue cancelado.');
        } catch (\Exception $e) {
            return redirect()->route('topup.form')->with('error', 'Error al procesar la cancelación: ' . $e->getMessage());
        }
    }

}
