<?php

namespace App\Http\Controllers;

use App\Models\CarPic;
use App\Models\CarRental;
use App\Models\RentalContract as ModelsRentalContract;
use App\Models\RentalSchedule;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use PDO;
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

function checktime($searchinfo, $id){
    $i=0;
 

    // print_r($listcar);
    if($id=='1'){
        $starttimeuser= convertS($searchinfo['checkin'], $searchinfo['hourstart'],0);
        $endtimeuser= convertS($searchinfo['checkout'], $searchinfo['hourend'],0);
    } else{
        $starttimeuser= convertS(0,0,$searchinfo['pickup_date']);
        $endtimeuser= convertS(0,0,$searchinfo['return_date']);
    }


    // dd($searchinfo['car_id']);

    
    $listime = RentalSchedule::where('car_id',$searchinfo['car_id'])->get();
    $listime1=[];
    if (count($listime)>0){
        foreach($listime as $element){
            $listime1[$i]['secondstart']=convertS(0,0,$element['start_date']);
            $listime1[$i]['secondend']=convertS(0,0,$element['end_date']);
            $i+=1;
        }


    }else{
        return true;
    }


    $i=0;


    foreach($listime1 as $element){
        if( (($starttimeuser > $element['secondstart'] )  &&  ($starttimeuser > $element['secondend'])) || 
            (($endtimeuser   < $element['secondstart'] )  &&  ($endtimeuser <   $element['secondend']))
          ){
            
          } else{
            return false;
          }
    }
    
    return true;
}



class RentalContract extends Controller
{
    function carprofile(Request $request){

        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $gplx=null;
        $status=0;
       if($user_id!=null){
           $datauser= User::where('user_id',$user_id)->get()->first();
           $gplx=$datauser['driver_id'];

           $status=$datauser['driver_id_image_approval'];
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

        //nếu người thuê là chủ xe  thì cho nó về home
        if ($userid== $user_id){
            return view('User.eror404');

        }

        //so sao
        $tmp=0;
        $sosao= Review::where('car_id',$car_id)->get()->count();
        $listsao=Review::where('car_id',$car_id)->get();
        if($sosao>0){
            foreach($listsao as $element2){
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


        return view('User/carprofile',compact('carlist','img','chuxe','searchinfo','star_num','trip_number','user_id','gplx','status'));
    }

    function checkdate(Request $request){
        $searchinfo = $request->all();
       
         if  (checktime($searchinfo,'1')==true){
            $gt='true';
         }else{
            $gt='false';
         };
        
       return $gt;

    }


    function checkout(Request $request){
            $dataa1= $request->all();
            $searchinfo['checkin']= '';
            $searchinfo['checkout']= '';
            $searchinfo['hourstart']= '';
            $searchinfo['hourend']= '';

            $searchinfo['pickup_date']= $dataa1['pickup_date'];
            $searchinfo['return_date']= $dataa1['return_date'];
            $searchinfo['car_id']= $dataa1['car_id'];
          
            if  (checktime($searchinfo,'2')==true){
                
             }else{
               return view('User.loidatxe');
             };


        

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data=$request->all();
        $data['service_cost']=$data['contract_value']-$data['rental_price']-$data['shipping_cost'];

        $data['user_id']=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $data['contract_date'] = date("Y-m-d H:i:s");
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


    function mytrip(Request $request){
        $data=$request->session()->get('inforcontract');
        $data['status']='Đang liên hệ';
        
        $p = new ModelsRentalContract($data);
   
        $p->save();
        
        $rental= ModelsRentalContract::where('contract_date',$data['contract_date'])->get()->first();
        $contractid=$rental['contract_id'];
        $ss['id_rental_contract']= $contractid;
        $ss['car_id']=$data['car_id'];
        $ss['start_date']=$data['pickup_date'];
        $ss['end_date']=$data['return_date'];
        $ss['status']='Chờ xác nhận';

     //Khách hàng
        $id_user= $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $data123= User::where('user_id',$id_user)->get()->first();
        define('mail',$data123['email']);
        $datamail['mail']=$data123['email'];
        $datamail['name']=$data123['name'];
        $datamail['image']=(CarPic::where('car_id',$ss['car_id'])->get()->first())['image'];
        $datamail['carname']=(CarRental::where('car_id',$ss['car_id'])->get()->first())['name'];
        $datamail['start_date']= substr($ss['start_date'],0,13) ;
        $datamail['end_date']= substr($ss['end_date'],0,13) ;
        $datamail['rental_price']= (ModelsRentalContract::where('contract_id',$contractid)->get()->first())['rental_price'];
        $datamail['deposit']= (ModelsRentalContract::where('contract_id',$contractid)->get()->first())['deposit'];

        
        Mail::send('rental-contract-mail.thanhtoan', compact('datamail'), 
        function($message){
            $message->to(mail)
            ->subject('Thư xác nhận');
        });

        //Chủ xe

        
        $data123= CarRental::where('car_id',$ss['car_id'])->get()->first();
        $data1234= User::where('user_id',$data123['user_id'])->get()->first();
        define('mail1',$data1234['email']);

        $datamail1['name']=$data1234['name'];
        $datamail1['link']= 'http://localhost:8080/travelmobile/public/user/mycars/triplist'    ;

   
        Mail::send('rental-contract-mail.booking', compact('datamail1'), 
        function($message){
            $message->to(mail1)
            ->subject('Khách đặt xe kìa chủ xe ơi');
        });




        $s = new RentalSchedule($ss);
        $s->save();


        return redirect()->route('mytrips');
    }

    function mytrips(Request $request){

        $i=0;
        $data1= RentalSchedule::all();
        $id_contract=[];
        if(count($data1)>0){
            foreach($data1 as $element){
                $id_contract[$i] =  $element['id_rental_contract'];
                $i+=1;
            }
        };

        $i=0;
        $data3=[];
       foreach($id_contract as $id){
                $tmp= ModelsRentalContract::where('contract_id',$id)->get()->first();
               if($tmp['user_id']==$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')){
                    $data3[$i]['contract_id']=$tmp['contract_id'];
                    $data3[$i]['pickup_date']= substr($tmp['pickup_date'],0,10) ;
                    $data3[$i]['return_date']= substr($tmp['return_date'],0,10) ;
                    $data3[$i]['pickup_address']=$tmp['pickup_address'];
                    $data3[$i]['contract_value']=$tmp['contract_value'];
                    $data3[$i]['status']=$tmp['status'];
                    $data4= CarRental::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['name']=$data4['name'];
                    $data4=[];
                    $data4= CarPic::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['image']=$data4['image'];

                    $i+=1;
               }
       
       }
       $i=0;
       foreach($data3 as $element){
           if(($element['status']=='Đã hủy chuyến')||($element['status']=='Đã hoàn thành')){
                 array_splice($listscan,$i,1);
                 $i-=1;
           }
           $i+=1;
       }
       
       
        return view('profiles.mytrips',compact('data3'));
    }

    function historytrip(Request $request){
        $data = ModelsRentalContract::all();
        $data1=[];
        $data3=[];
        $i=0;
        foreach($data as $element){
            if(($element['user_id']==$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')
            )&&(
                (($element['status']=='Đã hủy chuyến'))||
                ($element['status']=='Đã hoàn thành'))
                ){
                    $data1[$i]=$element;
                    $i+=1;
                }
        }

        foreach($data1 as $element){
            $data3[$i]['contract_id']=$element['contract_id'];
            $data3[$i]['pickup_date']= substr($element['pickup_date'],0,10) ;
            $data3[$i]['return_date']= substr($element['return_date'],0,10) ;
            $data3[$i]['pickup_address']=$element['pickup_address'];
            $data3[$i]['contract_value']=$element['contract_value'];
            $data3[$i]['status']=$element['status'];
            $data4= CarRental::where('car_id',$element['car_id'])->get()->first();
            $data3[$i]['name']=$data4['name'];
            $data4=[];
            $data4= CarPic::where('car_id',$element['car_id'])->get()->first();
            $data3[$i]['image']=$data4['image'];

            $i+=1;
        }



        return view('profiles.historytrips',compact('data3'));

    }

    function cencelform(Request $request){
        $data= $request->all();
       

        $post= ModelsRentalContract::where('contract_id',$data['contract_id'])->get()->first();

        $post['status']="Đã hủy chuyến";
        $post->save();

        $name[0]= (User::where('user_id', $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get()->first())['name'];
        $mail= (User::where('user_id', $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get()->first())['email'];
        define('mail2',$mail);

        Mail::send('rental-contract-mail.mailcacell', compact('name'), 
        function($message){
            $message->to(mail2)
            ->subject('Bạn đã hủy thành cônng');
        });
        

        RentalSchedule::where('id_rental_contract', $data['contract_id'])->delete();
        return redirect()->route('triphistory');
    }

    function delete( Request $request ,$id){
         $data = ModelsRentalContract::where('contract_id',$id)->get()->first();
        //  $data = ModelsRentalContract::all();


 
         if($data['user_id'] == $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
         {
            ModelsRentalContract::where('contract_id', $id)->delete();
         }
    
 
 
     return redirect()->route('triphistory');
    }

    function triplist(Request $request){


        $danhsachxe=CarRental::where('user_id',$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get();
        $data=RentalSchedule::all();    
        $i=0;
        $id_contract=[];


        foreach($data as $element){
            foreach($danhsachxe as $element2){
                if(($element['car_id']==$element2['car_id'])
                &&(
                    ($element['status']=="Chờ xác nhận")||
                    ($element['status']=="Đang giao xe")||
                    ($element['status']=="Đang cho thuê")||
                    ($element['status']=="Đã nhận xe")
                    )
                ){
                    $id_contract[$i]['id_contract']=$element['id_rental_contract'];
                    $id_contract[$i]['status']=$element['status'];
                    $i+=1;
                }
            }
        }

        
        $data3=[];
        $i=0;
       foreach($id_contract as $id){
                $tmp= ModelsRentalContract::where('contract_id',$id['id_contract'])->get()->first();
                    $data3[$i]['contract_id']=$tmp['contract_id'];
                    $data3[$i]['pickup_date']= substr($tmp['pickup_date'],0,13) ;
                    $data3[$i]['return_date']= substr($tmp['return_date'],0,13) ;
                    $data3[$i]['pickup_address']=$tmp['pickup_address'];
                    $data3[$i]['deposit']=$tmp['deposit'] - $tmp['service_cost']- ($tmp['rental_price']*0.15);
                    $data3[$i]['remaining']=$tmp['contract_value']-$tmp['deposit'];
                    $data3[$i]['status']=$id['status'];
                    $data4= CarRental::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['name']=$data4['name'];
                    $data4=[];
                    $data4= CarPic::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['image']=$data4['image'];
                    $tmp2=User::where('user_id',$tmp['user_id'])->get()->first();
                    $data3[$i]['phone']=$tmp2['mobile'];
                    $i+=1;
       
       }



       return view('profiles.triplist',compact('data3'));

    }
    function danhanxe($id,Request $request){
        
            $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
            $post['status']="Đã hoàn thành";
            $post->save();

            RentalSchedule::where('id_rental_contract',$id)->delete();


            //  mail khach
            $name[0]= (User::where('user_id',((ModelsRentalContract::where('contract_id',$id)->get()->first())['user_id']))->get()->first())['name'];
            $mail=(User::where('user_id',((ModelsRentalContract::where('contract_id',$id)->get()->first())['user_id']))->get()->first())['email'];
            define('mail3',$mail);

            Mail::send('rental-contract-mail.mailcamonkhach', compact('name'), 
            function($message){
                $message->to(mail3)
                ->subject('Cảm ơn bạn đã sử dụng dịch vụ');
            });

            //mall cảm ơn chủ xe

            $data= (User::where('user_id',((CarRental::where('car_id',((ModelsRentalContract::where('contract_id',$id)->get()->first())['car_id']))->get()->first())['user_id']))->get()->first()) ;
            
            $name[0]= $data['name'];
            define('mail4',$data['email']);

            Mail::send('rental-contract-mail.mailcamonchuxe', compact('name'), 
            function($message){
                $message->to(mail4)
                ->subject('Cảm ơn bạn đã sử dụng dịch vụ');
            });


            return redirect()->route('historyforrental');

    }

    function historyforrental(Request $request){

        $danhsachxe=CarRental::where('user_id',$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get();
        $data=ModelsRentalContract::all();    
        $i=0;
        $id_contract=[];


        foreach($data as $element){
            foreach($danhsachxe as $element2){
                if(($element['car_id']==$element2['car_id'])
                && ($element['status']=="Đã hoàn thành")
                    
                ){
                    $id_contract[$i]['id_contract']=$element['contract_id'];
                    $id_contract[$i]['status']=$element['status'];
                    $i+=1;
                }
            }
        }


        $data3=[];
        $i=0;
       foreach($id_contract as $id){
                $tmp= ModelsRentalContract::where('contract_id',$id['id_contract'])->get()->first();
                    $data3[$i]['contract_id']=$tmp['contract_id'];
                    $data3[$i]['pickup_date']= substr($tmp['pickup_date'],0,13) ;
                    $data3[$i]['return_date']= substr($tmp['return_date'],0,13) ;
                    $data3[$i]['pickup_address']=$tmp['pickup_address'];
                    $data3[$i]['deposit']=$tmp['deposit'] - $tmp['service_cost']- ($tmp['rental_price']*0.15);
                    $data3[$i]['remaining']=$tmp['contract_value']-$tmp['deposit'];
                    $data3[$i]['status']=$id['status'];
                    $data4= CarRental::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['name']=$data4['name'];
                    $data4=[];
                    $data4= CarPic::where('car_id',$tmp['car_id'])->get()->first();
                    $data3[$i]['image']=$data4['image'];
                    $tmp2=User::where('user_id',$tmp['user_id'])->get()->first();
                    $data3[$i]['phone']=$tmp2['mobile'];
                    $i+=1;
       
       }



       return view('profiles.historyforrental',compact('data3'));

    }

    function detailsrental($id , Request $request){
        $data3['tmp']= '1';
        $data = ModelsRentalContract::where('contract_id',$id)->get()->first();
        $data2= CarRental::where('car_id',$data['car_id'])->get()->first();
        $data4= User::where('user_id',$data2['user_id'])->get()->first();
        $data3['contract_id']=$data['contract_id'];
        $data3['image']=(CarPic::where('car_id',$data['car_id'])->get()->first())['image'];
        $data3['user_name']= $data4['name'];
        $data3['car_name']= $data2['name'];
        $data3['plate_id']= $data2['plate_id'];
        $data3['max_travel_distance']= $data2['max_travel_distance'];
        $data3['over_max_travel_cost']= $data2['over_max_travel_cost'].'000';
        $data3['rent_price']= $data2['rent_price'];
        $data3['customer_name']= (User::where('user_id',$data['user_id'])->get()->first())['name'];
        $data3['customer_mobile']= (User::where('user_id',$data['user_id'])->get()->first())['mobile'];
        
        if(count(RentalSchedule::where('id_rental_contract',$id)->get())>0){
            $data3['status']= (RentalSchedule::where('id_rental_contract',$id)->get()->first())['status'];
        }else{
            $data3['status']='';
        }
        $data3['pickup_date']=  substr($data['pickup_date'],0,13);
        $data3['return_date']= substr($data['return_date'],0,13);
        $data3['pickup_address']= $data['pickup_address'];
        $data3['rental_price']= $data['rental_price'];
        $data3['shipping_cost']= $data['shipping_cost'];
        
        $data3['customer_deposit']= '';
        $data3['service_cost']= $data['rental_price']*0.15;
        $data3['deposit_after_rental']= $data['deposit']-$data['service_cost']-($data['rental_price']*0.15);
        $data3['remaining']=  $data['contract_value']-$data['deposit'];
        
        return view('profiles.pagerental',compact('data3'));

    }

    function detailsrentaluser($id , Request $request){
        $data = ModelsRentalContract::where('contract_id',$id)->get()->first();
        $data2= CarRental::where('car_id',$data['car_id'])->get()->first();
        $data4= User::where('user_id',$data2['user_id'])->get()->first();


        $data3['contract_id']=$data['contract_id'];
        $data3['image']=(CarPic::where('car_id',$data['car_id'])->get()->first())['image'];
        $data3['user_name']= $data4['name'];
        $data3['car_name']= $data2['name'];
        $data3['plate_id']= $data2['plate_id'];
        $data3['max_travel_distance']= $data2['max_travel_distance'];
        $data3['over_max_travel_cost']= $data2['over_max_travel_cost'].'000';
        $data3['rent_price']= $data2['rent_price'];
        $data3['customer_name']= (User::where('user_id',$data['user_id'])->get()->first())['name'];
        $data3['customer_mobile']= (User::where('user_id',$data['user_id'])->get()->first())['mobile'];
        
        if(count(RentalSchedule::where('id_rental_contract',$id)->get())>0){
            $data3['status']= (RentalSchedule::where('id_rental_contract',$id)->get()->first())['status'];
        }else{
            $data3['status']='';
        }
        $data3['pickup_date']=  substr($data['pickup_date'],0,13);
        $data3['return_date']= substr($data['return_date'],0,13);
        $data3['pickup_address']= $data['pickup_address'];
        $data3['rental_price']= $data['contract_value'];
        $data3['shipping_cost']= $data['shipping_cost'];
        $data3['tmp']= '2';
        $data3['customer_deposit']= $data['deposit'];
        $data3['service_cost']=  $data['service_cost'] ;
        $data3['deposit_after_rental']= $data['deposit']-$data['service_cost'] -($data['rental_price']*0.15);
        $data3['remaining']=  $data['contract_value']-$data['deposit'];
        
        return view('profiles.pagerental',compact('data3'));

    }


    function detailsrentaladmin($id , Request $request){
        $data = ModelsRentalContract::where('contract_id',$id)->get()->first();
        $data2= CarRental::where('car_id',$data['car_id'])->get()->first();
        $data4= User::where('user_id',$data2['user_id'])->get()->first();


        $data3['contract_id']=$data['contract_id'];
        $data3['image']=(CarPic::where('car_id',$data['car_id'])->get()->first())['image'];
        $data3['user_name']= $data4['name'];
        $data3['car_name']= $data2['name'];
        $data3['plate_id']= $data2['plate_id'];
        $data3['max_travel_distance']= $data2['max_travel_distance'];
        $data3['over_max_travel_cost']= $data2['over_max_travel_cost'].'000';
        $data3['rent_price']= $data2['rent_price'];
        $data3['customer_name']= (User::where('user_id',$data['user_id'])->get()->first())['name'];
        $data3['customer_mobile']= (User::where('user_id',$data['user_id'])->get()->first())['mobile'];
        
        if(count(RentalSchedule::where('id_rental_contract',$id)->get())>0){
            $data3['status']= (RentalSchedule::where('id_rental_contract',$id)->get()->first())['status'];
        }else{
            $data3['status']='';
        }
        $data3['pickup_date']=  substr($data['pickup_date'],0,13);
        $data3['return_date']= substr($data['return_date'],0,13);
        $data3['pickup_address']= $data['pickup_address'];
        $data3['rental_price']= $data['contract_value'];
        $data3['shipping_cost']= $data['shipping_cost'];
        $data3['tmp']= '3';
        $data3['customer_deposit']= $data['deposit'];
        $data3['service_cost']= $data['service_cost'] + ($data['rental_price']*0.15);
        $data3['deposit_after_rental']= $data['deposit']-$data['service_cost'] -($data['rental_price']*0.15);
        $data3['remaining']=  $data['contract_value']-$data['deposit'];
        
        return view('admin-rental-contract.details',compact('data3'));

    }


    function getlist(){
       $data=ModelsRentalContract::all();
       $data1=[];
       $data3=[];
       $i=0;
       foreach($data as $element){
           if($element['status']!='Đã hủy chuyến'){
            $data1[$i]['contract_id']=$element['contract_id'];
            $data1[$i]['car_name']=(CarRental::where('car_id',$element['car_id'])->get()->first())['name'];
            $data1[$i]['pickup_date']=$element['pickup_date'];
            $data1[$i]['return_date']=$element['return_date'];
            $data1[$i]['contract_value']=$element['contract_value'];
            $data1[$i]['service_cost']=$element['service_cost']+($element['rental_price']*0.15) ;
            $data1[$i]['status']=$element['status'];

            $i+=1;
           }
           
       }
       return view('admin-rental-contract.index',compact('data1'));


    }


    function testmail(){
        $name=[];
        $name[1]="nhan";

        Mail::send('rental-contract-mail.thanhtoan',$name, 
        function($message){
            $message->to('lengthanhnhan123@gmail.com','Demo tets')
            ->subject('Test gửi mail');
        });
        // dd('Nhan');

    }




    


}
