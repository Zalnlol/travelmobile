<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51JFgZ6H6AZEb7dRzxGOrHcoqmMspkZ7ODHdOZqXOSYic5TMoY7Fx64K0fbMzd3a6Rqd6jU6MuiVcjuuXwhYHGDea00bQcRSAsz');
        		
		$amount = 50;
		$amount *= 100;
        $amount = (int) $amount;
        
        // $payment_intent = \Stripe\PaymentIntent::create([
		// 	'description' => 'Stripe Test Payment',
		// 	'amount' => $amount,
		// 	'currency' => 'INR',
		// 	'description' => 'Payment From Codehunger',
		// 	'payment_method_types' => ['card'],
		// ]);
		// $intent = $payment_intent->client_secret;

        // $payment_intent= \Stripe\Refund::create([
        //     'charge' => 'ch_1JFgyWH6AZEb7dRzABsDP5mt'
        // ]);
      $transfers=   \Stripe\transfer::create([
            'amount' => 400,
            'currency' => 'usd',
            'destination' => 'acct_1JFgZ6H6AZEb7dRz',
            'transfer_group' => 'ORDER_95',
          ]);
        $intent = $transfers->client_secret;
		return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}