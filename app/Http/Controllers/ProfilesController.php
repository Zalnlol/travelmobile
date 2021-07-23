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
    
    
    

    public function edit(Request  $request ,User $user)
    {   

        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        return view('profiles.edit', compact('user', 'user_id'));
    }

    public function update(Request  $request ,User $user)
    {
        // $this->authorize('update', $user->profile);
        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        $data = request()->validate([
            'name' => 'required',
            'image' => '',
            'mobile' => '',
            'dob' => '',
            'gender' => 'required',
            'email' => 'email',
            'driver_id' => '',
            'driver_id_image' => '',
        ]);

        $user->update($data);
        return redirect("/profile/{$user->id}");

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
    }
}
