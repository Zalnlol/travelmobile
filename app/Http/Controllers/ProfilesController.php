<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        // dd(User::find($user));
        $user = User::find($user);
        // return view('home',['user'=>$user]);
        return view('index', compact('user'));
        // return view('User.index', compact('user'));
        // return view('home', [
        //     'user'=> $user
        // ]);    
    }
    
    
    

    // public function edit(User $user)
    // {
    //     $this->authorize('update', $user->profile);

    //     return view('profiles.edit', compact('user'));
    // }

    // public function update(User $user)
    // {
    //     $this->authorize('update', $user->profile);

    //     $data = request()->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'url' => 'url',
    //         'image' => '',
    //     ]);

    //     if (request('image')) {
    //         $imagePath = request('image')->store('profile', 'public');

    //         $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
    //         $image->save();

    //         $imageArray = ['image' => $imagePath];
    //     }

    //     auth()->user()->profile->update(array_merge(
    //         $data,
    //         $imageArray ?? []
    //     ));

    //     return redirect("/profile/{$user->id}");
    // }
}
