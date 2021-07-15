<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $post = Review::all();
        return view('User-Review.index', compact('post'));
    }

    public function store(Request $req)
    {
        $post = $req->all();
        Review::create($post);
        return redirect('review');
    }
}
