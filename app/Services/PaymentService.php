<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use MyFatoorah\Library\API\Payment\MyFatoorahPayment;
use MyFatoorah\Library\API\Payment\MyFatoorahPaymentStatus;

class PaymentService
{
    protected $mf;
    protected $config;

    public function __construct()
    {
        $this->config = [
            'apiKey'      => config('myfatoorah.api_key'),
            'isTest'      => config('myfatoorah.test_mode'),
            'countryCode' => config('myfatoorah.country_iso'),
        ];
        $this->mf = new MyFatoorahPayment($this->config);
    }


    public function createPayment($order)
    {
        $user = User::find($order->user_id);

        $data = [
            'CustomerName' => $user->name, 
            'CustomerEmail' => $user->email, 
            'CustomerMobile' => null,
            'NotificationOption' => 'LNK',
            'InvoiceValue' => $order->total,
            'UserDefinedField' => $order->order_id,
            'CallBackUrl' => route('payment.callback'),
            'ErrorUrl' => route('payment.callback'),
        ];

        //
        $response = $this->mf->sendPayment($data);

        //
        // dd($response);

        //
        Log::info("InvoiceId : " . $response->InvoiceId . "\n");
        Log::info("InvoiceURL : " . $response->InvoiceURL . "\n");
        Log::info("CustomerReference : " . $response->CustomerReference . "\n");
        Log::info("UserDefinedField : " . $response->UserDefinedField . "\n");

        //
        return $response->InvoiceURL;
    }


    public function handleCallback($paymentId)
    {
        //
        $payment_status = new MyFatoorahPaymentStatus($this->config);
        //
        return $payment_status->getPaymentStatus($paymentId, 'PaymentId');
    }
}
