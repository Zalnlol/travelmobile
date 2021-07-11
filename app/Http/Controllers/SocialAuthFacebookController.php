<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthFacebookController extends Controller
{
    //Create a redirect method to facebook API
    //@return void
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback()
    {
       
    }
}
