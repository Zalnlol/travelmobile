<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;
use App\Models\CarPic;
use App\Models\CarMFG;
use App\Models\CarType;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalRequest;

class MyCarController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $mycar = CarRental::where('user_id', $data)->get();
        return view('User-Rental.index', compact('mycar'));
    }

    public function create(Request $request)
    {
        $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        return view('User-Rental.create', compact('data'));
    }

    public function update($car_id, Request $req)
    {
        $crentals = CarRental::where('car_id', $car_id)->first();
        return view('User-Rental.update', compact('crentals'));
    }

    public function edit(Request $req)
    {
        $car_id = $req->car_id;
        $brand = $req->brand;
        $name = $req->name;
        $seatnum = $req->seatnum;
        $model_year = $req->model_year;
        $auto = $req->auto;
        $fuel = $req->fuel;
        $consumption = $req->consumption;
        $rent_price = $req->rent_price;
        $description = $req->description;
        $convertible = $req->convertible;
        $bluetooth = $req->bluetooth;
        $gps = $req->gps;
        $usb = $req->usb;
        $kid_chair = $req->kid_chair;
        $map = $req->map;
        $camera = $req->camera;
        $discount_weekly = $req->discount_weekly;
        $discount_monthly = $req->discount_monthly;
        $address = $req->address;
        $max_ship_distance = $req->max_ship_distance;
        $shipping_price_km = $req->shipping_price_km;
        $free_ship_distance = $req->free_ship_distance;
        $max_travel_distance = $req->max_travel_distance;
        $over_max_travel_cost = $req->over_max_travel_cost;
        $rules = $req->rules;

        $up = DB::table('tb_car_rental')
        ->where('car_id', intval($car_id))
        ->update(['brand'=> $brand, 'name'=>$name, 'seatnum' => $seatnum, 'model_year' => $model_year, 'auto'=>$auto, 'fuel'=>$fuel,
        'consumption'=>$consumption, 'rent_price'=> $rent_price, 'description'=>$description, 'convertible' => $convertible, 'bluetooth' => $bluetooth, 'gps'=>$gps, 'usb'=>$usb,
        'kid_chair'=>$kid_chair, 'map'=> $map, 'camera'=>$camera, 'discount_weekly' => $discount_weekly, 'discount_monthly' => $discount_monthly, 'address'=>$address, 'max_ship_distance'=>$max_ship_distance,
        'shipping_price_km'=>$shipping_price_km, 'free_ship_distance'=> $free_ship_distance, 'max_travel_distance'=>$max_travel_distance, 'over_max_travel_cost' => $over_max_travel_cost, 'rules' => $rules]);  
        
        $approval = $req->approval;
        if($approval == 1){
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->update(['status' => 4]);
        }else if($approval == null){
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->update(['status' => 2]);
        }
        else{
            $ostatus = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->first();
            $status = $ostatus->status;
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->update(['status' => $status]);
        }
        return redirect('mycar');   
    }

    public function store(RentalRequest $req)
    {    
        $crentals = $req->all();      
        CarRental::create($crentals);
        $user_id = $req->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        //$getid = CarRental::where('user_id', $data)->get('car_id');
        //dd($data = CarRental::where('user_id', $user_id)->get('car_id'));
        $plate_id = $req->plate_id;
        dd($data = CarRental::where('plate_id', $plate_id)->get('car_id'));
        // dd($car_id = $req->session()->get('car_id'));

        return redirect()->route('rental.upload', compact('data'));
    }

    public function delete($car_id)
    {
        $rentals = CarRental::where('car_id', $car_id)->first();
        $rentals->delete();
        return redirect('mycar');
    }

    public function image()
    { 
        // $images = CarPic::where('car_id', intval($car_id))->get()->first();
        return view('Rental-image.index');
    }

    public function upload(Request $request)
    {   
        return view('Rental-image.create');
    }

    public function checkUpload(Request $request)
    {
        $uploads = $request->all();
        if($request->hasFile('image', 'image_left', 'image_right', 'image_behind')){
            $file = $request->file('image', 'image_left', 'image_right', 'image_behind');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png'){
                return redirect('mycar/image/upload');
            }
                $imgName = $file->getClientOriginalName();
                $file->move('images/carimg', $imgName);
                $uploads['image'] = $imgName;
                $uploads['image_left'] = $imgName;
                $uploads['image_right'] = $imgName;
                $uploads['image_behind'] = $imgName;
        }

        $up = new CarPic($uploads);
        $up->save();
        return redirect('mycar/image');
    }

}
