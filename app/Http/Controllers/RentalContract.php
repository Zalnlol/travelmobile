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


        return view('User/carprofile',compact('carlist','img','chuxe','searchinfo','star_num','trip_number'));
    }
}
