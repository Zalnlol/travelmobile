<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        // $user = User::find($user);
        // return view('home',['user'=>$user]);
        return view('User.profile', compact('user'));
        //return view('User.index', compact('user'));       
    }   

    public function edit(User $user){
        return view('User.edit', compact('user'));
    }
}
