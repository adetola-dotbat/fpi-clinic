<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize(Request $request)
    {
        $report_id = $request->query('id');
        $amount = $request->query('amount');
        $user_email = $request->query('email');
        $user_phone = $request->query('user_phone');
        $uname = $request->query('uname');
    
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => $amount,
            'email' => $user_email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback', $report_id),
            'customer' => [
                'email' => $user_email,
                "phone_number" => $user_phone,
                "name" => $uname,
            ],

            "customizations" => [
                "title" => 'Hospital Bill',
                "description" => 'Hospital Bill',
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback($report_id)
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        $report = Report::findorfail($report_id);
        $report->payment = 'success';
        $report->save();
        return redirect('/nichinto')->with('success', 'Payment successful');
        }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
        return redirect('/nichinto')->with('fail', 'Payment Cancelled');

        }
        else{
            //Put desired action/code after transaction has failed here
        return redirect('/nichinto')->with('fail', 'Payment cancelled');

        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}