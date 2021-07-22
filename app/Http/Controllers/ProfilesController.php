<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index(Request  $request ,User $user)
    {   
     
        $data = User::all();

        foreach($data as $element){
            if($element['user_id']=$user['$user']){
                $user=$element;
            }

        }
        
        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');


        // return view('home',['user'=>$user]);
        // return view('index', compact('user'));
        return view('profiles.index', compact('user','user_id'));
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
