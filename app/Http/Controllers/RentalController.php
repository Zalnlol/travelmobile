<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CarRental;
use App\Models\CarPic;
use Illuminate\Support\Facades\DB;

class RentalController extends Controller
{
    public function index()
    {
        $rental = CarRental::paginate(10);
        return view('Admin-Rental.index', compact('rental'));
    }

    public function view($car_id)
    {
        $rentalview = CarRental::where('car_id', $car_id)->get()->first();
        return view('Admin-Rental.view', compact('rentalview'));
    }

    public function approval($car_id, Request $req)
    {
        $approval = $req->approval;
        if($approval == 1){
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->update(['status' => 2]);
        }else if($approval == 2){
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                ->update(['status' => 3]);
        }else{
            $ostatus = DB::table('tb_car_rental')
            ->where('car_id', intval($car_id))
            ->first();
            $status = $ostatus->status;
            $up = DB::table('tb_car_rental')
                ->where('car_id', intval($car_id))
                 ->update(['status' => $status]);
        }
        return redirect('admin/rental');
    }

    public function delete($car_id)
    {
        $rentals = CarRental::where('car_id', $car_id)->get()->first();
        $rentals->delete();
        return redirect('admin/rental');
    }

    public function active()
    {
        $rental = CarRental::where('status', 2)->paginate(10);
        return view('Admin-Rental.active-index', compact('rental'));
    }

    public function deny()
    {
        $rental = CarRental::where('status', 3)->paginate(10);
        return view('Admin-Rental.deny-index', compact('rental'));
    }

    public function carimg($car_id)
    {
        $img = CarPic::where('car_id', $car_id)->get();
        return view('Admin-Rental.carimg', compact('img'));
    }

    public function waiting()
    {
        $rental = CarRental::where('status', 1)->paginate(10);
        return view('Admin-Rental.waiting', compact('rental'));
    }


}
