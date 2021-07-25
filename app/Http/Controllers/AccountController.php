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
        $ds = DB::table('tb_user')->get();
        return view("Admin-User.index",compact('ds'));
        
    }

    //tra ve view tao 1 tai khoan user moi
    public function create(){
        return view("Admin-User.create");
    }

    //luu du lieu input tu form create-user vo database
    public function postCreate(Request $request){
        //Nhận tất cả tham số vào mảng user
        $user = $request->all();
        //Xử lý upload hình
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension!='jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect('product/create')->with('Lỗi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        }
        else{
            $imageName = null;
        }

        DB::table('tb_user')->insert([
            'user_id'=>intval($user['user_id']),
            'name'=>$user['name'],
            'email'=>$user['email'],
            'password'=>$user['password'],
            'is_admin'=>'1',
        ]);
        return redirect()->action([AccountController::class, 'index']);
    }

    public function update($user_id){
        $user = User::find($user_id);
        return view('Admin-User.update',['user'=>$user]);
    }

    public function postUpdate(Request $request, $id){
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $gender = $request->input('gender');
        $status = $request->input('status');
        $driver_id = $request->input('driver_id');
        //Xử lý upload hình vào thư mục
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect('user/update')->width('Lỗi', ' Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/images",$imageName);
        } else {//Không upload hình mới => giữ lại hình cũ
            $user = DB::table('tb_user')
                    ->where('user_id',intval($id))
                    ->first();
                    $imageName = $user->driver_id_image;
        }
        $user = DB::table('tb_user')
            ->where('user_id',intval($id))
            ->update(['name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'gender'=>$gender, 'status'=>$status, 'driver_id'=>$driver_id, 'driver_id_image'=>$imageName]);
            return redirect()->action([AccountController::class, 'index']);
    }

    public function delete($user_id){
        $user = User::find($user_id);
        $user->delete();
        return redirect()->action([AccountController::class, 'index']);
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