<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;
use App\Models\CarPic;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalRequest;

class MyCarController extends Controller
{
    public function index()
    {
        $mycar = CarRental::all();
        return view('User-Rental.index', compact('mycar'));
    }

    public function create()
    {
        return view('User-Rental.create');
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
        return redirect('mycar');
    }

    public function delete($id)
    {
        $rentals = CarRental::where('car_id', $car_id)->first();
        $rentals->delete();
        return redirect('mycar');
    }

    public function image()
    {
        return view('Rental-image.index');
    }

    public function upload(Request $req)
    {
        return view('Rental-image.create');
    }

}