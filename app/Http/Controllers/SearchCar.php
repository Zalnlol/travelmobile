<?php

namespace App\Http\Controllers;

use App\Models\CarMFG;
use App\Models\CarPic;
use App\Models\CarRental;
use App\Models\CarType;
use App\Models\RentalContract;
use App\Models\RentalSchedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use phpDocumentor\Reflection\Element;

function convertS($date, $hour,$timeday){

    if($timeday==0){
        $time = $date .' '. $hour.':00' ;
    } else{
        $time=$timeday;
    }

    
    $convert= new Carbon($time);
    $h = $convert->format('H');
    $i = $convert->format('i');
    $s = $convert->format('s');
    $m = $convert->format('m');
    $d = $convert->format('d');
    $y = $convert->format('Y');
    $date = mktime($h , $i, $s, $m,$d,$y);
    return $date;
}

function ScanWithinRadius($maker, $usermap, $radius){
    $bk=0.000855036*$radius;
    $xe =[];
    $i=0;

    foreach($maker as $element){

        if(  (($usermap['lat']-$bk <= $element['lat'])&&($usermap['lng']+$bk >=$element['lng'])   &&($usermap['lat'] >= $element['lat']) &&($usermap['lat'] <= $element['lng']))                 ||                 
        (($usermap['lat']+$bk >= $element['lat'])&&($usermap['lng']+$bk >= $element['lng'])   &&($usermap['lat'] <= $element['lat']) &&($usermap['lat'] <= $element['lng']))                 ||        
        (($usermap['lat']-$bk <= $element['lat'])&&($usermap['lng']-$bk <= $element['lng'])   &&($usermap['lat'] >= $element['lat']) &&($usermap['lat'] >= $element['lng']))                 || 
        (($usermap['lat']+$bk >= $element['lat'])&&($usermap['lng']-$bk <= $element['lng']))  &&($usermap['lat'] <= $element['lat']) &&($usermap['lat'] >= $element['lng']) )
        {
     
           $xe[$i]=$element;
           $i+=1;

        // dd($element);

   }

    }


    return $xe;

}



function checkschedule($list,$searchinfo){
    $xe =[];
    $i=0;
    $Schedule= RentalSchedule::all();



    foreach($list as $element){
        foreach($Schedule as$element2 ){
            if($element['car_id']==$element2['car_id']){
                    $tx['car_id']=$element['car_id'];
                    $tx['start_date']=$element2['start_date'];
                    $tx['end_date']=$element2['end_date'];
                    $xe[$i]=  $tx;
                    $i +=1;
            }
        }
    }
    return checktime($xe, $searchinfo);
}

function checktime($listcar, $addressuser){
    $i=0;
    // print_r($listcar);

    $starttimeuser= convertS($addressuser['checkin'], $addressuser['hourstart'],0);
    $endtimeuser= convertS($addressuser['checkout'], $addressuser['hourend'],0);


    foreach($listcar as $element){
       
        $listcar[$i]['secondstart']=convertS(0,0,$element['start_date']);
        $listcar[$i]['secondend']=convertS(0,0,$element['end_date']);
        $i+=1;
    }


    foreach($listcar as $element){
        if( (($starttimeuser > $element['secondstart'] )  &&  ($starttimeuser > $element['secondend'])) || 
            (($endtimeuser   < $element['secondstart'] )  &&  ($endtimeuser <   $element['secondend']))
          ){
            $element['car_id']='bbbb';
          } 
    }
    
    return $listcar;
    
}



class SearchCar extends Controller
{

    

    function search(Request $request){

        $i=0;
        $searchinfo= $request->all();
        $carlist=CarRental::all();

        // dd(ScanWithinRadius($carlist, $searchinfo, 10));
       $listscan= ScanWithinRadius($carlist, $searchinfo, 10);
        

    //    checkschedule($listscan,$searchinfo);


       foreach($listscan as $element){
            foreach(checkschedule($listscan,$searchinfo) as $element2){
                if($element['car_id']==$element2['car_id']){
                    unset($listscan[$i]);
                }
            }
            $i+=1;
       }
       $i=0;
       foreach($listscan as $element){
            $listcardiplay[$i]['car_id'] = $element['car_id'];
           $listcardiplay[$i]['name'] = $element['name'];
           $listcardiplay[$i]['auto'] = $element['auto'];
           $listcardiplay[$i]['rent_price'] = $element['rent_price'];
           $listcardiplay[$i]['free_ship_distance'] = $element['free_ship_distance'];
           
      
      
                // so chuyen
            $sochuyen=RentalContract::where('car_id',$element['car_id'])->get();
            $listcardiplay[$i]['trip_number']=$sochuyen->count();
                    
            $sosao=
      
            $i+=1;
        }



    //    dd($listcardiplay);

       
       
       
       



        $Carimage=CarPic::All();
        
       
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



