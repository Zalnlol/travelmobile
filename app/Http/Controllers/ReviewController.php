<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\CarRental;
use App\Models\RentalContract;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    function review($id)
    {
        $coid = RentalContract::where('contract_id', $id)->first()->contract_id;
        $uid = RentalContract::where('contract_id', $id)->first()->user_id;
        $caid = RentalContract::where('contract_id', $id)->first()->car_id;
        // dd($caid);
        return view('User-review.index', compact('coid', 'uid', 'caid'));
    }

    function postReview(Request $request)
    {
        $review = $request->all();
        DB::table('tb_review')->insert([
            'user_id'=>$review['user_id'],
            'car_id'=>$review['car_id'],
            'contract_id'=>$review['contract_id'],
            'star_num'=>$review['star_num'],
            'comment'=>$review['comment'],
        ]);

        return redirect()->back();
    }
}
