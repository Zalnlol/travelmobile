<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;
use App\Models\CarPic;
use App\Models\CarMFG;
use App\Models\CarType;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalRequest;
use App\Http\Requests\ImageRequest;

class MyCarController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $mycar = CarRental::where('user_id', $data)->get();
        return view('profiles.Mycars', compact('mycar'));
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
        ->update(['brand'=> $brand, 'name'=>$name, 'auto'=>$auto, 'fuel'=>$fuel, 'consumption'=>$consumption, 'rent_price'=> $rent_price, 
        'description'=>$description, 'convertible' => $convertible, 'bluetooth' => $bluetooth, 'gps'=>$gps, 'usb'=>$usb,
        'kid_chair'=>$kid_chair, 'map'=> $map, 'camera'=>$camera, 'discount_weekly' => $discount_weekly,
        'discount_monthly' => $discount_monthly, 'address'=>$address, 'max_ship_distance'=>$max_ship_distance,
        'shipping_price_km'=>$shipping_price_km, 'free_ship_distance'=> $free_ship_distance, 'max_travel_distance'=>$max_travel_distance,
        'over_max_travel_cost' => $over_max_travel_cost, 'rules' => $rules]);  
        
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
        $data = CarRental::where('plate_id', $plate_id)->get('car_id')->first()->car_id;

        // return redirect()->route('rental.upload', compact('data'));
        return view('Rental-image.create', compact('data'));
    }

    public function delete($car_id)
    {
        $rentals = CarRental::where('car_id', $car_id)->first();
        $rentals->delete();
        return redirect('mycar');
    }

    public function image($car_id)
    { 
        $data = CarPic::where('car_id', $car_id)->first();
        return view('Rental-image.index', compact('data'));
    }

    public function checkUpload(Request $request)
    {
        $uploads = $request->all();
        if($request->hasFile('image', 'image_left', 'image_right', 'image_behind')){
            $file = $request->file('image');
            $file1 = $request->file('image_left');
            $file2 = $request->file('image_right');
            $file3 = $request->file('image_behind');
            $extension = $file->getClientOriginalExtension();
            $extension = $file1->getClientOriginalExtension();
            $extension = $file2->getClientOriginalExtension();
            $extension = $file3->getClientOriginalExtension();

                $imgName = $file->getClientOriginalName();
                $imgName1 = $file1->getClientOriginalName();
                $imgName2 = $file2->getClientOriginalName();
                $imgName3 = $file3->getClientOriginalName();
                $file->move('images/carimg', $imgName);
                $file1->move('images/carimg', $imgName1);
                $file2->move('images/carimg', $imgName2);
                $file3->move('images/carimg', $imgName3);
                $uploads['image'] = $imgName;
                $uploads['image_left'] = $imgName1;
                $uploads['image_right'] = $imgName2;
                $uploads['image_behind'] = $imgName3;
        }
        
        $up = new CarPic($uploads);
        $up->save();
        return redirect('mycar');
    }

    public function updateImage($car_id, Request $request)
    {
        $data = CarPic::where('car_id', $car_id)->first();
        return view('Rental-image.update', compact('data'));
    }

    public function checkupdateImage(Request $request, $car_id)
    {
        $file = $request->image;
        $file1 = $request->image_left;
        $file2 = $request->image_right;
        $file3 = $request->image_behind;
        if($request->hasFile('image')){
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'jpeg' && $extension !='png'){
                $errs[404] = 'Bạn chỉ được upload file hình';
                return redirect()->route('rental.image.update', $car_id)->with('errors', $errs);
            }
            $imgName = $file->getClientOriginalName();
            $file->move('images/carimg', $imgName);
            $car_pic['image'] = $imgName;
        }else{
            $oldimg = DB::table('tb_car_pic')
                ->where('car_id', intval($car_id))
                ->first();
            $imgName = $oldimg->image;
        }

        if($request->hasFile('image_left')){
            $extension = $file1->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'jpeg' && $extension !='png'){
                $errs[404] = 'Bạn chỉ được upload file hình';
                return redirect()->route('rental.image.update', $car_id)->with('errors', $errs);
            }
            $imgName1 = $file1->getClientOriginalName();
            $file1->move('images/carimg', $imgName1);
            $car_pic['image_left'] = $imgName1;
        }else{
            $oldimg = DB::table('tb_car_pic')
                ->where('car_id', intval($car_id))
                ->first();
            $imgName1 = $oldimg->image_left;
        }

        if($request->hasFile('image_right')){
            $extension = $file2->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'jpeg' && $extension !='png'){
                $errs[404] = 'Bạn chỉ được upload file hình';
                return redirect()->route('rental.image.update', $car_id)->with('errors', $errs);
            }
            $imgName2 = $file2->getClientOriginalName();
            $file2->move('images/carimg', $imgName2);
            $car_pic['image_left'] = $imgName2;
        }else{
            $oldimg = DB::table('tb_car_pic')
                ->where('car_id', intval($car_id))
                ->first();
            $imgName2 = $oldimg->image_right;
        }

        if($request->hasFile('image_behind')){
            $extension = $file3->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'jpeg' && $extension !='png'){
                $errs[404] = 'Bạn chỉ được upload file hình';
                return redirect()->route('rental.image.update', $car_id)->with('errors', $errs);
            }
            $imgName3 = $file3->getClientOriginalName();
            $file3->move('images/carimg', $imgName3);
            $car_pic['image_left'] = $imgName3;
        }else{
            $oldimg = DB::table('tb_car_pic')
                ->where('car_id', intval($car_id))
                ->first();
            $imgName3 = $oldimg->image_behind;
        }
        
        $update = DB::table('tb_car_pic')
                ->where('car_id', intval($car_id))
                ->update(['image' => $imgName, 'image_left' => $imgName1, 'image_right' => $imgName2, 'image_behind' => $imgName3]);
        return redirect()->route('rental.image', $car_id);
    }


    public function test1()
    {
        return view('test1');
    }
}
