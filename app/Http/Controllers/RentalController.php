<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;
use Illuminate\Support\Facades\DB;

class RentalController extends Controller
{
    public function index()
    {
        $rental = CarRental::all();
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

}
