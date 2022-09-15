<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TruckOrderPayment;
use Exception;

class TruckOrderPaymentController extends Controller
{
    private $SECRET_KEY;

    public function __construct()
    {
        $this->SECRET_KEY = config('flutterwave.secret');
    }

    public function verifyTruckOrderPayment(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required|string',
            'truck_order_id' => 'required|string',
            'details' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string'
        ]);

        try 
        {
           $curl = curl_init();

           curl_setopt_array($curl, array(
           CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "GET",
           CURLOPT_HTTPHEADER => array(
               "Content-Type: application/json",
               "Authorization: Bearer " . $this->SECRET_KEY
           ),
           ));

           $response = curl_exec($curl);

           curl_close($curl);
          
           $res = json_decode($response);
        }
        catch(Exception $e)
        {
            return response()->json($e->getMessage(), 500);
        }

      
           if($res->status == "success" && $res->data->status == "successful")
           {

                $track_order_payment = new TruckOrderPayment();
                $track_order_payment->truck_order_id = $request->truck_order_id;
                $track_order_payment->details = $request->details;
                $track_order_payment->transaction_id = $request->transaction_id;
                $track_order_payment->amount_paid = $res->data->amount_paid;
                $track_order_payment->currency = $res->data->currency;

            // $track_order_payment->email = $request->email;
                $track_order_payment->save();

                return response("success", 200);
           }else 
           
           {
            return response("failed", 200);
           }

    }
}
