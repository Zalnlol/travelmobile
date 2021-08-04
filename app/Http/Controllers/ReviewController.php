<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\CarRental;
use App\Models\RentalContract;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function review($id)
    {
        $coid = RentalContract::where('contract_id', $id)->first()->contract_id;
        $uid = RentalContract::where('contract_id', $id)->first()->user_id;
        $caid = RentalContract::where('contract_id', $id)->first()->car_id;
        $data = Review::where('contract_id', $id)->get();
        //dd($data);
        if(count($data) > 0)
        {
            $id = Review::where('contract_id', $id)->first()->id;
            //dd($id);
            // $hasReview = Review::where('id', $data)->get();
            return view('User-review.done');
        }
        
        return view('User-review.index', compact('coid', 'uid', 'caid'));      
    }

    public function postReview(Request $request)
    {
        $review = $request->all();
        Review::create($review);
        return redirect('/');
    }

    public function lookReview($id, Request $request)
    {
        $data = Review::where('contract_id', $id)->get();

        //dd($data);
        return view('User-Review.look', compact('data'));
    }
}
