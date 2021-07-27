<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
 
        
        if ($request->session()->has('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')!=false) {
            $id =$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');   
            $data= User::where('user_id',$id)->get()->first();
            $r=$data['is_admin']==1?"admin":"user";
            if(in_array($r,$roles)){
                return $next($request);
            }
           
        }

        return redirect()->route('login');
    }
}
