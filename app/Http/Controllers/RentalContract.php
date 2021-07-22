<?php

namespace App\Http\Controllers;

use App\Models\CarPic;
use App\Models\CarRental;
use App\Models\RentalContract as ModelsRentalContract;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class RentalContract extends Controller
{
    function carprofile(Request $request){

        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $gplx=null;
       if($user_id!=null){
           $datauser= User::where('user_id',$user_id)->get()->first();
           $gplx=$datauser['driver_id'];
       }

        $data= $request->all();

        $searchinfo['city']=$data['city'];
        $searchinfo['lat']=$data['lat'];
        $searchinfo['lng']=$data['lng'];
        $searchinfo['checkin']=$data['checkin'];
        $searchinfo['hourstart']=$data['hourstart'];
        $searchinfo['checkout']=$data['checkout'];
        $searchinfo['hourend']=$data['hourend'];

        $car_id=$data['car_id'];

        $carlist=CarRental::where('car_id',$car_id)->get()->first();
        $userid=$carlist['user_id'];
        $img= CarPic::where('car_id',$car_id)->get()->first();
        $chuxe=user::where('user_id',$userid)->get()->first();

        //so sao
        $tmp=0;
        $sosao= Review::where('car_id',$car_id)->get()->count();
        if($sosao>0){
            foreach($sosao as $element2){
                $tmp+=$element2['star_num'];
            }
            $tmp= round($tmp/$sosao);
        } else{
            $tmp=0;
        }
        $star_num=$tmp;

        //So chuyen
        $sochuyen=ModelsRentalContract::where('car_id',$car_id)->get();
        $trip_number=$sochuyen->count();


        return view('User/carprofile',compact('carlist','img','chuxe','searchinfo','star_num','trip_number','user_id','gplx'));
    }

    function checkout(Request $request){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data=$request->all();
        $data['user_id']=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $data['contract_date'] = date("Y-m-d H:00:00");
        $request->session()->put('inforcontract', $data);

        \Stripe\Stripe::setApiKey('sk_test_51JFgZ6H6AZEb7dRzxGOrHcoqmMspkZ7ODHdOZqXOSYic5TMoY7Fx64K0fbMzd3a6Rqd6jU6MuiVcjuuXwhYHGDea00bQcRSAsz');
        		
		$amount =(float) round($data['deposit']/23000,2)*100   ;

        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'usd',
			'description' => 'Thanh toán phí cọc dịch vụ thuê xe TravelMobile',
			'payment_method_types' => ['card'],
		]);
		// $intent = $payment_intent->client_secret;

        // $payment_intent= \Stripe\Refund::create([
        //     'charge' => 'ch_1JFgyWH6AZEb7dRzABsDP5mt'
        // ]);
    //   $transfers=   \Stripe\transfer::create([
    //         'amount' => 400,
    //         'currency' => 'usd',
    //         'destination' => 'acct_1JFgZ6H6AZEb7dRz',
    //         'transfer_group' => 'ORDER_95',
    //       ]);
        $amount/=100;
        $intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent','amount'));

    }


}
