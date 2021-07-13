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

    public function view($id)
    {
        $rentalview = CarRental::find($id);
        return view('Admin-Rental.view', compact('rentalview'));
    }

    public function approval($id, Request $req)
    {
        $approval = $req->approval;
        if($approval == 1){
            $up = DB::table('car_rentals')
                ->where('id', intval($id))
                ->update(['status' => 2]);
        }else if($approval == 2){
            $up = DB::table('car_rentals')
                ->where('id', intval($id))
                ->update(['status' => 3]);
        }else{
            $ostatus = DB::table('car_rentals')
            ->where('id', intval($id))
            ->first();
            $status = $ostatus->status;
            $up = DB::table('car_rentals')
                ->where('id', intval($id))
                 ->update(['status' => $status]);
        }
        return redirect('admin/rental');
    }

    public function delete($id)
    {
        $rentals = CarRental::find($id);
        $rentals->delete();
        return redirect('admin/rental');
    }

    public function slider()
    {
        return view('Admin-Rental.slider');
    }

}
