<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('tb_user')->get();
        return view('user.index')->with(['users'=>$users]);
    }

    public function create(){
        return view('user.create');
    }

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
        return redirect()->action([UserController::class, 'index']);
    }
    public function update($id){
        $user = DB::table('tb_user')
                ->where('user_id',intval($id))
                ->first();
        return view('user.update',['user'=>$user]);
    }

    public function postUpdate(Request $request, $id){
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $password = $request->input('password');
        $facebook = $request->input('facebook');
        $mobile = $request->input('mobile');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $driver_id = $request->input('driver_id');
        $joined_date = $request->input('joined_date');
        $status = $request->input('status');
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
                    $imageName = $user->image;
        }
        $user = DB::table('tb_user')
            ->where('user_id',intval($id))
            ->update(['fullname'=>$fullname, 'email'=>$email, 'password'=>$password, 'facebook'=>$facebook, 'mobile'=>$mobile, 'gender'=>$gender, 'dob'=>$dob, 'driver_id'=>$driver_id, 'driver_id_image'=>$imageName, 'joined_date'=>$joined_date, 'status'=>$status]);
            return redirect()->action([UserController::class, 'index']);
    }

    public function delete($id){
        $user = DB::table('tb_user')
        ->where('user_id', intval($id))
        ->delete();
        return redirect()->action([UserController::class, 'index']);
    }
}
