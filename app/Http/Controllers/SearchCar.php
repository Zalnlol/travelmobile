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

            $stu= convertS($searchinfo['checkin'], $searchinfo['hourstart'],0);
            $etu= convertS($searchinfo['checkout'], $searchinfo['hourend'],0);

            if($stu>$etu){
                $tmp1=$searchinfo['checkin'];
                $searchinfo['checkin']=$searchinfo['checkout'];
                $searchinfo['checkout']=$tmp1;

                $tmp2=$searchinfo['hourstart'];
                $searchinfo['hourstart']=$searchinfo['hourend'];
                $searchinfo['hourend']=$tmp2;

            }

            if(count($searchinfo)==0){
                $searchinfo['city']='Hồ Chí Minh, Thành phố Hồ Chí Minh';
                $searchinfo['lat']='10.8230989';
                $searchinfo['lng']='106.6296638';
                $searchinfo['checkin']='Sun Jul 18 2021';
                $searchinfo['hourstart']='11';
                $searchinfo['checkout']='Sun Jul 19 2021';
                $searchinfo['hourend']='11';
            }

                $carlist=CarRental::where("status","2")->get();
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
                                array_splice($listscan,$i,1);
                                $i-=1;
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
                $sochuyen=RentalContract::where('car_id',$element['car_id'])->where('status','Đã hoàn thành')->get();
                $arrays[$i]['trip_number']=$sochuyen->count();
                
                //so sao
                $tmp=0;
                $sosao= Review::where('car_id',$element['car_id'])->get()->count();
                $listsao=Review::where('car_id',$element['car_id'])->get();
                if($sosao>0){
                    foreach($listsao as $element2){
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
                                array_splice($listscan,$i,1);
                                $i-=1;
                            }
                        }
                        $i+=1;
                }




                //Filter

                $max=$data['max'];
                $min=$data['min'];
            
               
                if( ($min !=null) && ($max !=null))
                {  
                    $i=0;
                    foreach($listscan as $element){
                        if ( ($element['rent_price']>$max) ||($element['rent_price']<$min) ){
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                } elseif(($min !=null) && ($max ==null)){
                    $i=0;
                    foreach($listscan as $element){
                        if ( $element['rent_price']<$min ){
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }elseif(($min ==null) && ($max !=null)){
                    $i=0;
                    foreach($listscan as $element){
                        if  ($element['rent_price']>$max) {
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }



                $cho4=$data['4cho'];
                $cho7=$data['7cho'];
                $bantai=$data['bantai'];

  


                if(($cho4==1)&&($cho7==0)&&($bantai==0)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if((($car['seatnum']==4)||($car['seatnum']==5))&&($car['car_style']!='PICK-UP') ){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }elseif(($cho4==0)&&($cho7==1)&&($bantai==0)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if (($car['seatnum']==7)&&($car['car_style']!='PICK-UP') ){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }

                }elseif(($cho4==0)&&($cho7==0)&&($bantai==1)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if ($car['car_style']=='PICK-UP'){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }

                }elseif(($cho4==1)&&($cho7==1)&&($bantai==0)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if((($car['seatnum']==4)||($car['seatnum']==5)||($car['seatnum']==7))&&($car['car_style']!='PICK-UP') ){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }elseif(($cho4==1)&&($cho7==0)&&($bantai==1)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if((($car['seatnum']==4)||($car['seatnum']==5))||($car['car_style']=='PICK-UP') ){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }elseif(($cho4==0)&&($cho7==1)&&($bantai==1)){
                    $i=0;
                    foreach($listscan as $element){
                        $car =CarType::where('type_id',$element['type_id'])->get()->first();
                        // print_r($car['seatnum'].'  ,  ');
                        if((($car['seatnum']==7))||($car['car_style']=='PICK-UP') ){   
                        }else{
                            array_splice($listscan,$i,1);
                            $i-=1;
                        }
                        $i+=1;
                    }
                }

                $brand=$data['brand'];
                
                if($brand!=null){
                    $i=0;
                    foreach($listscan as $element){
                       if($element['brand']!=$brand){
                            array_splice($listscan,$i,1);
                            $i-=1;
                       }
                       $i+=1;
                    }
                }


                $auto=$data['auto'];

               if($auto!=null){
                   if($auto==1){
                    $i=0;
                    foreach($listscan as $element){
                       if($element['auto']!=$auto){
                            array_splice($listscan,$i,1);
                            $i-=1;
                       }
                        $i+=1;
                        }
                   }else{
                    $i=0;
                    foreach($listscan as $element){
                       if($element['auto']!=$auto){
                            array_splice($listscan,$i,1);
                            $i-=1;
                       }
                        $i+=1;
                        }

                   }
               }
            
            $i=0;
            foreach($listscan as $element){
                $arrays[$i]['car_id'] = $element['car_id'];
                $arrays[$i]['name'] = $element['name'];
                $arrays[$i]['auto'] = $element['auto'];
                $arrays[$i]['rent_price'] = $element['rent_price'];
                $arrays[$i]['free_ship_distance'] = $element['free_ship_distance'];
                $arrays[$i]['address'] = $element['address'];
                        // so chuyen
                    $sochuyen=RentalContract::where('car_id',$element['car_id'])->where('status','Đã hoàn thành')->get();
                    $arrays[$i]['trip_number']=$sochuyen->count();
                    
                    //so sao
                    $tmp=0;
                    $sosao= Review::where('car_id',$element['car_id'])->get()->count();
                    $listsao=Review::where('car_id',$element['car_id'])->get();
                    if($sosao>0){
                        foreach($listsao as $element2){
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



