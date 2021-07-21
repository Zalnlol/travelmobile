<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //Mở trang login
    public function login(){
        return view("login");
    }
    //kiem tra tai khoan dang nhap user
    public function checkLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $user = DB::table('tb_user')->where("email",$email)->first();
        if($user!=null && $user->password == $password){
            //tao bien session de luu thong tin TK dang nhap thanh cong
            $request->session()->put('user', $user);
            
            if($user->role == 1){
                return redirect("admin/users");
            }else{
                return redirect("user".$user->id);
            }
        }
        else{
            return redirect("login")->with("message","Login fail, try again !");
        }
    }

    //kiểm tra tài khoản đăng nhập admin
    public function checkAdminLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $admin = DB::table('tb_admin')->where("username",$username)->first();
        if($admin != null && $admin->password == $password){
            //Tạo biến sesssion để lưu thông tin TK đăng nhập thành công
            $request->session()->put('admin', $admin);
            if($admin->role == 1){
                return redirect("user/index");
            } else {
                return redirect("user/index");
            }
        }
        else{
            return redirect("login")->with("message", 'Login fail, try again!');
        }
    }
    
    //clear session & signout
    public function logout(Request $request){
        // Auth::logout();
        $request->session()->invalidate();
        // $request->session()->forget('user');
        // $request->session()->regenerateToken();          //Bảo mật
        return redirect('login');
    }

    //Mở trang register (đăng ký)
    public function register(){
        return view("register");
    }
}