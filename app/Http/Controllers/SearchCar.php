<?php

namespace App\Http\Controllers;

use App\Models\CarMFG;
use App\Models\CarPic;
use App\Models\CarRental;
use App\Models\CarType;
use App\Models\RentalContract;
use App\Models\RentalSchedule;
use App\Models\Review;
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
    $bk=0.00855036*$radius;
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

    $i=0;


    foreach($listcar as $element){
        if( (($starttimeuser > $element['secondstart'] )  &&  ($starttimeuser > $element['secondend'])) || 
            (($endtimeuser   < $element['secondstart'] )  &&  ($endtimeuser <   $element['secondend']))
          ){
            $listcar[$i]['car_id']='bbbb';
            $i+=1;
          } 
    }
    
    return $listcar;
    
}



class SearchCar extends Controller
{

    
function search(Request $request){

            $i=0;
            $searchinfo= $request->all();

            if(count($searchinfo)==0){
                $searchinfo['city']='Hồ Chí Minh, Thành phố Hồ Chí Minh';
                $searchinfo['lat']='10.8230989';
                $searchinfo['lng']='106.6296638';
                $searchinfo['checkin']='Sun Jul 18 2021';
                $searchinfo['hourstart']='11';
                $searchinfo['checkout']='Sun Jul 19 2021';
                $searchinfo['hourend']='11';
            }

        

                $carlist=CarRental::all();
                $arrays=[];
                $listcardiplay=[];
                
                

                // dd(ScanWithinRadius($carlist, $searchinfo, 10));
            $listscan= ScanWithinRadius($carlist, $searchinfo, 10);
                
            //    dd($listscan);
                // print_r();
        

                checkschedule($listscan,$searchinfo);
                // dd(checkschedule($listscan,$searchinfo));

                foreach($listscan as $element){
                        foreach(checkschedule($listscan,$searchinfo) as $element2){
                            if($element['car_id']==$element2['car_id']){
                                unset($listscan[$i]);
                            }
                        }
                        $i+=1;
                }
            // dd($listscan);


            
            $i=0;
            foreach($listscan as $element){
                $arrays[$i]['car_id'] = $element['car_id'];
            $arrays[$i]['name'] = $element['name'];
            $arrays[$i]['auto'] = $element['auto'];
            $arrays[$i]['rent_price'] = $element['rent_price'];
            $arrays[$i]['free_ship_distance'] = $element['free_ship_distance'];
            $arrays[$i]['address'] = $element['address'];
                    // so chuyen
                $sochuyen=RentalContract::where('car_id',$element['car_id'])->get();
                $arrays[$i]['trip_number']=$sochuyen->count();
                
                //so sao
                $tmp=0;
                $sosao= Review::where('car_id',$element['car_id'])->get()->count();
                if($sosao>0){
                    foreach($sosao as $element2){
                        $tmp+=$element2['star_num'];
                    }
                    $tmp= round($tmp/$sosao);
                } else{
                    $tmp=0;
                }
                $arrays[$i]['star_num']=$tmp;

                //lay hinh

                $Carimage=CarPic::where('car_id',$element['car_id'])->get()->first();

                if($Carimage->count()>0){
                    $arrays[$i]['car_image']=$Carimage['image'];
                } else{
                    $arrays[$i]['car_image']='';
                }

                
                $i+=1;
            }
            


            $hangxe=CarMFG::all();

            $i=0;
        
            foreach($carlist as $element){
                $idmap[$i]['lat'] =$element['lat'];
                $idmap[$i]['lng'] =$element['lng'];
                $i+=1;
            }
            $i=0;

            foreach($arrays as $element){
                $listcardiplay[$i]=  (object) $element;
                $i+=1;
            }

            
            return view('User.searchcar',compact('listcardiplay','idmap','hangxe','searchinfo'));

}


function filter(Request $request){

    $i=0;
    $data=$request->all();
    $searchinfo['city']=$data['city'];
    $searchinfo['lat']=$data['lat'];
    $searchinfo['lng']=$data['lng'];
    $searchinfo['checkin']=$data['checkin'];
    $searchinfo['hourstart']=$data['hourstart'];
    $searchinfo['checkout']=$data['checkout'];
    $searchinfo['hourend']=$data['hourend'];

    $phamvi=$data['phamvi'];



        $carlist=CarRental::all();
         $arrays=[];
        $listcardiplay=[];
                
                

                // dd(ScanWithinRadius($carlist, $searchinfo, 10));
            $listscan= ScanWithinRadius($carlist, $searchinfo, $phamvi);
                
            //    dd($listscan);
                // print_r();
        

                checkschedule($listscan,$searchinfo);
                // dd(checkschedule($listscan,$searchinfo));

                foreach($listscan as $element){
                        foreach(checkschedule($listscan,$searchinfo) as $element2){
                            if($element['car_id']==$element2['car_id']){
                                unset($listscan[$i]);
                            }
                        }
                        $i+=1;
                }


                dd($listscan);


                //Filter
            $min= $data['min']   ;   
        
                if( ($data['min'] !=null) && ($data['max'] !=null))
                {
                    dd('gg');
                };

            
            $i=0;
            foreach($listscan as $element){
                $arrays[$i]['car_id'] = $element['car_id'];
                $arrays[$i]['name'] = $element['name'];
                $arrays[$i]['auto'] = $element['auto'];
                $arrays[$i]['rent_price'] = $element['rent_price'];
                $arrays[$i]['free_ship_distance'] = $element['free_ship_distance'];
                $arrays[$i]['address'] = $element['address'];
                        // so chuyen
                    $sochuyen=RentalContract::where('car_id',$element['car_id'])->get();
                    $arrays[$i]['trip_number']=$sochuyen->count();
                    
                    //so sao
                    $tmp=0;
                    $sosao= Review::where('car_id',$element['car_id'])->get()->count();
                    if($sosao>0){
                        foreach($sosao as $element2){
                            $tmp+=$element2['star_num'];
                        }
                        $tmp= round($tmp/$sosao);
                    } else{
                        $tmp=0;
                    }
                    $arrays[$i]['star_num']=$tmp;

                    //lay hinh

                    $Carimage=CarPic::where('car_id',$element['car_id'])->get()->first();

                    if($Carimage->count()>0){
                        $arrays[$i]['car_image']=$Carimage['image'];
                    } else{
                        $arrays[$i]['car_image']='';
                    }

                    
                    $i+=1;
            }
            


            $hangxe=CarMFG::all();

            $i=0;
        
            foreach($carlist as $element){
                $idmap[$i]['lat'] =$element['lat'];
                $idmap[$i]['lng'] =$element['lng'];
                $i+=1;
            }
            $i=0;

            foreach($arrays as $element){
                $listcardiplay[$i]=  (object) $element;
                $i+=1;
            }
    

            
    
    return view('User.searchcar',compact('listcardiplay','idmap','hangxe','searchinfo'));

}





 




    function testajax1(Request $request)
    {
        $brands=CarMFG::All();
        $cars=CarType::All();
        return view('testajax',compact('brands','cars'));

    }



}



