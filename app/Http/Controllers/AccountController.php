<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{   
    //tra ve view listing danh sach users
    public function index(){
        // dd('1231245');
        $ds = DB::table('tb_user')->get();
        return view("Admin-User.index",compact('ds'));
        
    }

    //tra ve view tao 1 tai khoan user moi
    public function create(){
        return view("Admin-User.create");
    }

    //luu du lieu input tu form create-user vo database
    public function createPost(Request $request){
        //lay du lieu tren form nhap tu bien $request
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        //insert vo bang tbuser
        DB::table('tb_user')->insert([
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
            "role"=>$role,
            "active"=>'1'
        ]);

        //tro ve trang admin.index
        return redirect()->action([AccountController::class, 'index']);
        // return redirect()->route("userlist");
        // return route("userlist");
    }

    //reset password theo ma so duoc truyen
    public function resetPassword($id){
        DB::table('tbuser')->where('id',$id)->update(["password"=>'123']);
        return redirect("admin/users");
    }


    //xem thong tin profile cua user khi biet id
    public function details($id){
        $user = DB::table('tbuser')->find($id);
        return view("user.profile", compact('user'));
    }


    //mo trang login
    public function login(){
        return view("login");
    }

    
    //kiem tra tai khoan dang nhap
    public function checkLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        
        $user = DB::table('tbuser')->where("username",$username)->first();
        if($user!=null && $user->password == $password){
            //tao bien session de luu thong tin TK dang nhap thanh cong
            $request->session()->put('user', $user);
            
            if($user->role == 1){
                return redirect("admin/users");
            }else{
                return redirect("user/profile/".$user->id);
            }
        }
        else{
            return redirect("login")->with("message","Login fail, try again !");
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
}