<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;


class FbController extends Controller
{
    //Create a redirect method to facebook API
    //@return void
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();
            
            if($facebookId){
                Auth::login($facebookId);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('john123')
                ]);
                
                Auth::login($createUser);
                return redirect('/');
            }
            
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
