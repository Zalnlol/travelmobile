<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CarMFG;
use App\Models\CarRental;
use App\Models\CarType;
use App\Models\RentalContract;
use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    function viewadmin(Request $request){

        $xedanghoatdong = count(CarRental::where('status','2')->get());
        $xechuaduyet = count(CarRental::where('status','1')->get());
        $hopdong = count(RentalContract::all());
        $danhsachnguoidung= count(User::where('is_admin',NULL)->get());
        $danhsachadmin= count(User::where('is_admin','1')->get());
        $danhsachhangxe= count(CarMFG::all());
        $danhsachmodel= count(CarType::all());


        $blog= count(Blog::all());
        // dd($danhsachadmin);

        return view('AdminHome',compact('xedanghoatdong','xechuaduyet','hopdong','danhsachnguoidung','danhsachadmin','blog','danhsachhangxe','danhsachmodel'));
    }
}
