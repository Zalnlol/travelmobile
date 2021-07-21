<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        // dd(User::find($user));
        if (Auth::check()){
            $id = Auth::id();
        }
        // return view('home',['user'=>$user]);
        return view('User.profile', compact('user'));
        // return view('User.index', compact('user'));
        // return view('home');       
    }
    
    

    // public function edit(User $user){
    //     return view('User.edit', compact('user'));
    // }
}
