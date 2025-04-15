<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    //
    protected $payment_service;

    public function __construct(PaymentService $payment_service)
    {
        $this->payment_service = $payment_service;
    }


    public function initiate($orderId)
    {
        $order = Order::findOrFail($orderId);
        $url = $this->payment_service->createPayment($order);
        return redirect($url);
    }

    public function callback(Request $request)
    {
        //
        $result = $this->payment_service->handleCallback($request->query("paymentId"));

        //
        $orderId = (int) $result->UserDefinedField;
        $order = Order::where('order_id', $orderId)->first();

        //
        $payment = new Payment();
        $payment->payment_id = $request->query("paymentId");
        $payment->invoice_id =  $result->InvoiceId;
        $payment->order_id = $orderId;

        //
        if ($result->InvoiceStatus == 'Paid') {

            // Update order status in DB
            $order->status = 'paid';
            $order->save();

            // Save payment info in DB
            $payment->status = 'paid';
            $payment->save();

            //
            return view('payment.success');
        } else {
            //
            $order->status = 'failed';
            $order->save();

            // Save payment info in DB
            $payment->status = 'failed';
            $payment->save();

            Log::info('==============================');
            Log::info('Failed payment');
            Log::info('==============================');

            return view('payment.failed');
        }
    }

    //
    public function failed() {}
}
