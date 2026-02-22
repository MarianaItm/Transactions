<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    /**
     * Handle webhook de PayPal
     */
    public function handle(Request $request)
    {
        $data = $request->all();

        $transaction = Transaction::updateOrCreate(
            ['transaction_id' => $data['transaction_id']],
            [
                'status' => $data['status'],
                'amount' => $data['amount']
            ]
        );

        return response()->json(['message' => 'OK']);
    }
}
