<?php

namespace App\Http\Controllers;

use App\Models\CarMFG;
use App\Models\CarPic;
use App\Models\CarRental;
use App\Models\CarType;
use Illuminate\Http\Request;
use Carbon\Carbon;

function convertS($date, $hour){
    $time = $date .' '. $hour.':00' ;
    $convert= new Carbon($time);
    $h = $convert->format('h');
    $i = $convert->format('i');
    $s = $convert->format('s');
    $m = $convert->format('m');
    $d = $convert->format('d');
    $y = $convert->format('Y');
    $date = mktime($h , $i, $s, $m,$d,$y);
    return $date;
}


class SearchCar extends Controller
{

     

    function search(Request $request){

        $searchinfo= $request->all();
        $Carimage=CarPic::All();
        $carlist=CarRental::all();
       
      $address =  $searchinfo['city'];
        return view('User.searchcar',compact('carlist','address','Carimage'));
    }


    function testajax1(Request $request)
    {
        $brands=CarMFG::All();
        $cars=CarType::All();
        return view('testajax',compact('brands','cars'));

    }



}



