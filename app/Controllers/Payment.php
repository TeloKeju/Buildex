<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function pay()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-Lyp8FBFYFn3ZSjuigaeE4nAg';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $housePrice = number_format($this->request->getPost('housePrice'), 2, '.', '');

        $orderId = rand();

        $params = [
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => (float)$housePrice,
            )
        ];

        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params),
            'order_id' => $orderId
        ];

        return $this->response->setJSON(['redirect' => site_url('payment/pay')]);
    }
}
