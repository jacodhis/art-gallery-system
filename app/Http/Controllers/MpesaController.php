<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Safaricom\Mpesa\Mpesa;

class MpesaController extends Controller
{
    //
    public function stk(Request $request){
        // $CallBackURL = 'http://26937c7b44a7.ngrok.io';
        
        // dd($request->phone);

            $BusinessShortCode = env('SHORTCODE');
            $LipaNaMpesaPasskey = env('PASSKEY');
            $TransactionType = 'CustomerPayBillOnline';
            $Amount = $request->amount;
            $PartyA = $request->phone;
            $PartyB = env('SHORTCODE');
            $PhoneNumber = $request->phone;
            $CallBackURL = 'http://dccf7078e5bd.ngrok.io/folder/callback.php';
            // $CallBackURL = 'http://84599e097069.ngrok.io/callback';
            $AccountReference = 'TestStk';
            $TransactionDesc = 'Payment product X';
            $Remarks = 'Payment Succefull!';

            $mpesa= new Mpesa();

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
        $senddata = json_encode($stkPushSimulation);

        return $senddata;
            // $this->getDataFromCallback();
    }


}
