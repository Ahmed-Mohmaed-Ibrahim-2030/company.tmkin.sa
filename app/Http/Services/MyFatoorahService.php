<?php

namespace App\Http\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class MyFatoorahService
{

    private $base_url;
    private $header;
    private $request_client;

    public function __construct(Client $request_client)
    {
        $this->request_client=$request_client;
        $this->base_url=env('FATOORAH_BASE_URL');
        $this->header=[
            'Content-Type'=>'application/json',
            'Authorization'=>'Bearer '.env('FATOORAH_TOKEN'),

        ];

    }

//    public function buildRequest($uri,$method,$data)
//    {
//        $response = Http::withToken('Bearer'.env('FATOORAH_TOKEN'))->acceptJson()->asForm()->post($this->base_url.$uri, $data);
////        $response = json_decode($response->getBody(), true);
////        return $response;
////        $response->successful();
////
////// Determine if the status code is >= 400...
////        $response->failed();
////
////// Determine if the response has a 400 level status code...
////        $response->clientError();
////
////// Determine if the response has a 500 level status code...
////        $response->serverError();
////
////// Immediately execute the given callback if there was a client or server error...
////        $response->onError(callable $callback);
//
//    }
    public function buildRequest($uri,$method,$body=[])
    {
        $request=new Request($method,$this->base_url.$uri,$this->header);
        if(!$body)
        {
            return false;
        }
        $response=$this->request_client->send(
            $request,
            [
                'json'=>$body
            ]
        );
        if($response->getStatusCode()!==200){
            return false;
        }

        $response = json_decode($response->getBody(), true);

        return $response;
    }


//    public function sendPayment($patient_id,$fee,$plan_id,$subscriptionPlan)
//    {
//        $requestData=$this->parsePayment();
//        $response=$this->buildRequest('v2/sendPayment','POST',$requestData);
//        if($response){
//            $this->saveTransactionPayment($patient_id,$response['Data']["InvoiceId"]);
//        }
    public function sendPayment($data)
    {
//        $requestData=$this->parsePayment();
//        $response=$this->buildRequest('v2/sendPayment','POST',$requestData);
//        if($response){
//            $this->saveTransactionPayment($patient_id,$response['Data']["InvoiceId"]);
//        }
//        return $response;

        $response=$this->buildRequest('v2/SendPayment','POST',$data);
        // we have to store the invoiceId in transaction table in db + the user id
        if($response['IsSuccess'])
//            echo $response['Data']['InvoiceId'];
        return $response;
    }

    private function parsePayment()
    {
    }

    private function saveTransactionPayment($patient_id, $InvoiceId)
    {
    }
    public function getPaymentStatus($data){
        $response=$this->buildRequest('v2/getPaymentStatus','POST',$data);
        // we have to store that the  invoiceId in transaction table in db  paid
        if($response['IsSuccess'])
//            echo $response['Data']['InvoiceId'];
        return $response;
    }
}
