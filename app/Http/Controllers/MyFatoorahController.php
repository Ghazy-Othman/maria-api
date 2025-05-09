<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use MyFatoorah\Library\MyFatoorah;
use MyFatoorah\Library\API\Payment\MyFatoorahPayment;
use MyFatoorah\Library\API\Payment\MyFatoorahPaymentEmbedded;
use MyFatoorah\Library\API\Payment\MyFatoorahPaymentStatus;
use Exception;
/**
 * @group User management
 *
 * APIs for managing users
 */
class MyFatoorahController extends Controller {

    /**
     * @var array
     */
    public $mfConfig = [];

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Initiate MyFatoorah Configuration
     */
    public function __construct() {
        $this->mfConfig = [
            'apiKey'      => config('myfatoorah.api_key'),
            'isTest'      => config('myfatoorah.test_mode'),
            'countryCode' => config('myfatoorah.country_iso'),
        ];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    
    public function index() {
        try {
            //For example: pmid=0 for MyFatoorah invoice or pmid=1 for Knet in test mode
            $paymentId = request('pmid') ?: 0;
            $sessionId = request('sid') ?: null;
            $orderId  = request('oid') ;
            
            $curlData = $this->getPayLoadData($orderId);

            $mfObj   = new MyFatoorahPayment($this->mfConfig);
            $payment = $mfObj->getInvoiceURL($curlData, $paymentId, $orderId, $sessionId);

            return redirect($payment['invoiceURL']);
        } catch (Exception $ex) {
            $exMessage = __('myfatoorah.' . $ex->getMessage());
            return response()->json(['IsSuccess' => 'false', 'Message' => $exMessage]);
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Example on how to map order data to MyFatoorah
     * You can get the data using the order object in your system
     * 
     * @param int|string $orderId
     * 
     * @return array
     */
    private function getPayLoadData( $orderId = null) {
        $callbackURL = route('myfatoorah.callback');

        //You can get the data using the order object in your system
        $order = Order::find($orderId) ;
        $user = User::find($order->user_id) ;

        return [
            'CustomerName'       => $user->name,
            'InvoiceValue'       =>  125 ,//$order->total,
            'DisplayCurrencyIso' => "KWD",
            'CustomerEmail'      => $user->email,
            'CallBackUrl'        => $callbackURL,
            'ErrorUrl'           => $callbackURL,
            'MobileCountryCode'  => null,
            'CustomerMobile'     => null,
            'Language'           => 'en',
            'CustomerReference'  => $orderId,
            'SourceInfo'         => 'Laravel ' . app()::VERSION . ' - MyFatoorah Package ' . MYFATOORAH_LARAVEL_PACKAGE_VERSION
        ];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Get MyFatoorah Payment Information
     * Provide the callback method with the paymentId
     * 
     * @return Response
     */
    public function callback() {

        try {
            $paymentId = request('paymentId');
            
            
            $mfObj = new MyFatoorahPaymentStatus($this->mfConfig);
            $data  = $mfObj->getPaymentStatus($paymentId, 'PaymentId');
            
            $message = $this->getTestMessage($data->InvoiceStatus, $data->InvoiceError);
            
            $response = ['IsSuccess' => true, 'Message' => $message, 'Data' => $data];
        } catch (Exception $ex) {
            $exMessage = __('myfatoorah.' . $ex->getMessage());
            $response  = ['IsSuccess' => 'false', 'Message' => $exMessage];
        }


        if(!$response['IsSuccess']) { 
            return response()->json(
                [
                    'success' => $response['IsSuccess'] , 
                    'message' => $response['Message'] , 
                ],
                400
            ) ; 
        }
        else { 
            $crde = [
                'invoice_id' => $response['Data']->InvoiceId , 
                'status' => $response['Data']->InvoiceStatus , 
                'order_id' => $response['Data']->CustomerReference , 
                'payment_gateway' => ($response['Data']->focusTransaction)->PaymentGateway , 
            ]  ;
            $pay = Payment::create($crde) ; 
            return response()->json([
                'success' => $response['IsSuccess'] , 
                'message' => $response['Message'] , 
                'data' => $pay
            ] , 201) ; 
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Example on how to Display the enabled gateways at your MyFatoorah account to be displayed on the checkout page
     * Provide the checkout method with the order id to display its total amount and currency
     * 
     * @return View
     */
    public function checkout() {

        try {
            //You can get the data using the order object in your system
            $orderId = request('oid') ?: 147;
            $order   = $this->getTestOrderData($orderId);

            //You can replace this variable with customer Id in your system
            $customerId = request('uid');

            //You can use the user defined field if you want to save card
            $userDefinedField = config('myfatoorah.save_card') && $customerId ? "CK-$customerId" : '';

            //Get the enabled gateways at your MyFatoorah acount to be displayed on checkout page
            $mfObj          = new MyFatoorahPaymentEmbedded($this->mfConfig);
            $paymentMethods = $mfObj->getCheckoutGateways($order['total'], $order['currency'], config('myfatoorah.register_apple_pay'));

            if (empty($paymentMethods['all'])) {
                throw new Exception('noPaymentGateways');
            }

            //Generate MyFatoorah session for embedded payment
            $mfSession = $mfObj->getEmbeddedSession($userDefinedField);

            
            //Get Environment url
            $isTest = $this->mfConfig['isTest'];
            
            $vcCode = $this->mfConfig['countryCode'];

            $countries = MyFatoorah::getMFCountries();
            $jsDomain  = ($isTest) ? $countries[$vcCode]['testPortal'] : $countries[$vcCode]['portal'];

            return view('myfatoorah.checkout', compact('mfSession', 'paymentMethods', 'jsDomain', 'userDefinedField'));
        } catch (Exception $ex) {
            $exMessage = __('myfatoorah.' . $ex->getMessage());
            return view('myfatoorah.error', compact('exMessage'));
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Example on how the webhook is working when MyFatoorah try to notify your system about any transaction status update
     */
    public function webhook(Request $request) {
        try {
            //Validate webhook_secret_key
            $secretKey = config('myfatoorah.webhook_secret_key');
            if (empty($secretKey)) {
                return response(null, 404);
            }

            //Validate MyFatoorah-Signature
            $mfSignature = $request->header('MyFatoorah-Signature');
            if (empty($mfSignature)) {
                return response(null, 404);
            }

            //Validate input
            $body  = $request->getContent();
            $input = json_decode($body, true);
            if (empty($input['Data']) || empty($input['EventType']) || $input['EventType'] != 1) {
                return response(null, 404);
            }

            //Validate Signature
            if (!MyFatoorah::isSignatureValid($input['Data'], $secretKey, $mfSignature, $input['EventType'])) {
                return response(null, 404);
            }

            //Update Transaction status on your system
            $result = $this->changeTransactionStatus($input['Data']);

            return response()->json($result);
        } catch (Exception $ex) {
            $exMessage = __('myfatoorah.' . $ex->getMessage());
            return response()->json(['IsSuccess' => false, 'Message' => $exMessage]);
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
    private function changeTransactionStatus($inputData) {
        //1. Check if orderId is valid on your system.
        $orderId = $inputData['CustomerReference'];

        //2. Get MyFatoorah invoice id
        $invoiceId = $inputData['InvoiceId'];

        //3. Check order status at MyFatoorah side
        if ($inputData['TransactionStatus'] == 'SUCCESS') {
            $status = 'Paid';
            $error  = '';
        } else {
            $mfObj = new MyFatoorahPaymentStatus($this->mfConfig);
            $data  = $mfObj->getPaymentStatus($invoiceId, 'InvoiceId');

            $status = $data->InvoiceStatus;
            $error  = $data->InvoiceError;
        }

        $message = $this->getTestMessage($status, $error);

        //4. Update order transaction status on your system
        return ['IsSuccess' => true, 'Message' => $message, 'Data' => $inputData];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
    private function getTestOrderData($orderId) {
        return [
            'total'    => 145,
            'currency' => 'KWD'
        ];
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
    private function getTestMessage($status, $error) {
        if ($status == 'Paid') {
            return 'Invoice is paid.';
        } else if ($status == 'Failed') {
            return 'Invoice is not paid due to ' . $error;
        } else if ($status == 'Expired') {
            return $error;
        }
    }

//-----------------------------------------------------------------------------------------------------------------------------------------
}
