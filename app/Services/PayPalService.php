<?php

namespace App\Services;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalService
{
    protected $provider;

    public function __construct()
    {
        $this->provider = new PayPalClient();
        $this->provider->setApiCredentials(config('paypal'));
        $token = $this->provider->getAccessToken();
        $this->provider->setAccessToken($token);
    }

    /**
     * Se encarga de crear la orden en PayPal
     * @param float $amount
     */
    public function createOrder(float $amount)
    {
        return $this->provider->createOrder([
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel'),
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $amount
                    ]
                ]
            ]
        ]);
    }

    /**
     * Se encarga de capturar la orden en PayPal
     * @param string $orderId
     */
    public function captureOrder(string $orderId)
    {
        return $this->provider->capturePaymentOrder($orderId);
    }

    /**
     * Se encarga de consultar el estado de la orden en PayPal
     * @param string $orderId
     */
    public function getOrderDetails(string $orderId)
    {
        return $this->provider->showOrderDetails($orderId);
    }
}
