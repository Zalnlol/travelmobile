<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class GoogleLogin extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            $googleId=User::where('google_id', $user->id)->first();
            if($googleId){
                Auth::login($googleId);
                return redirect('/');
            }
            else{
                $createUser = User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'google_id'=>$user->id,
                    'password' => encrypt('john123')
                ]);
                Auth::login($createUser);
                return redirect()->back();
            }
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
