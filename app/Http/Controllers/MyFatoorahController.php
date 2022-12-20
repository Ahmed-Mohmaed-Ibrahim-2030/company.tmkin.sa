<?php

namespace App\Http\Controllers;

use App\Http\Services\MyFatoorahService;
use Carbon\Language;
use Illuminate\Http\Request;

class MyFatoorahController extends Controller
{
    private $fatoorahServices;
    // initialization of (
    public function __construct( MyFatoorahService $fatoorahServices)
    {
        $this->fatoorahServices=$fatoorahServices;

    }
    public function payment()
    {

        $data=[
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '200',
            'CustomerName'       => 'احمد محمد ابراهيم ',
            'CustomerEmail'       => 'ahmedmoibrahim22@gmail.com',
            'CallBackUrl'=>env('SUCCESS_URL'),
            'ErrorUrl'=>'https://google.com',
            'Language'=>'ar',
            'DisplayCurrencyIso'=>'SAR'

        ];

        return $this->fatoorahServices->sendPayment($data);


    }
    public function callBack(Request $request)
    {
//        return $request;
//        $data = [];
//        $data['Key'] = $request->payementId;
//        $data['KeyType'] = 'paymentId';
        $data=[
            'Key'=>$request->paymentId,
            'KeyType'=>'paymentId'
        ];


        $response=  $this->fatoorahServices->getPaymentStatus($data);
//        return $this->fatoorahServices->getPaymentStatus($data);
        // search where invoice id = $paymentData['Data]['InvoiceId];
        if($response['IsSuccess'])
            return back();
        dd($response);

    }

    public function payForm(Request $request)
    {
        $request->validate(

            [
                'user_name'=>'required|string',
                'phone'=>'required|min:10',
                'service'=>'required|string',
                'sub_service'=>'required|string',
            ]
        );

        $data=[
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '200',
            'CustomerName'       => $request['user_name'],
            'MobileCountryCode'  => '+966',
            'CustomerMobile'     => $request['phone'],
            'UserDefinedField'=>$request['service']."->".$request['sub_service'],
            'CustomerEmail'       => 'ahmedmoibrahim22@gmail.com',
            'CallBackUrl'=>env('SUCCESS_URL'),
            'ErrorUrl'=>'https://google.com',
            'Language'=>'ar',
            'DisplayCurrencyIso'=>'SAR'

        ];

        return $this->fatoorahServices->sendPayment($data);

    }
    public function paymentTest()
    {

        $data=[
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '200',
            'CustomerName'       => 'احمد محمد ابراهيم ',
            'CustomerEmail'       => 'ahmedmoibrahim22@gmail.com',
            'CallBackUrl'=>env('SUCCESS_URL'),
            'ErrorUrl'=>'https://google.com',
            'Language'=>'ar',
            'DisplayCurrencyIso'=>'SAR'

        ];

        $response= $this->fatoorahServices->sendPayment($data);
        if($response['IsSuccess'])
          return  redirect($response['Data']['InvoiceURL']);
dd($response);

    }
}

