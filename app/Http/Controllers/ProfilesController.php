<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    public function viewSelfProfile(Request  $request){
        $data = user::where('user_id',$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get()->first();
        $user = $data;
        $user_id = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        return view('profiles.index', compact('user','user_id'));

    }
    public function index(Request  $request ,User $user)
    {   
     
        $data = User::all();

        foreach($data as $element){
            if($element['user_id']=$user['$user']){
                $user=$element;
            }
        }
        
        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        return view('profiles.index', compact('user','user_id'));  
        }
        
    
    

    public function edit(Request  $request ,User $user)
    {   

        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        return view('profiles.edit', compact('user', 'user_id'));
    }

    //WIP
    // public function update(Request  $request ,User $user)
    // {   
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $mobile = $request->input('mobile');
    //     $gender = $request->input('gender');
    //     $status = $request->input('status');
    //     $driver_id = $request->input('driver_id');
    //     $data = request()->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'image' => '',
    //         'mobile' => 'required',
    //         'dob' => '',
    //         'gender' => 'required',
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:tb_user'],
    //         'driver_id' => '',
    //         'driver_id_image' => '',
    //     ]);
    //     $user_id = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    //     // dd($user_id);
    //     //Xử lý upload hình vào thư mục
    //     if($request->hasFile('image')){
    //         $file=$request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
    //             return redirect('user/update')->width('Lỗi', ' Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
    //         }
    //         $imageName = $file->getClientOriginalName();
    //         $file->move("public/images",$imageName);
    //     } else {//Không upload hình mới => giữ lại hình cũ
    //         $user = DB::table('tb_user')
    //                 ->where('user_id',intval($id))
    //                 ->first();
    //                 $imageName = $user->driver_id_image;
    //     }
    //     $user = DB::table('tb_user')
    //         ->where('user_id',intval($id))
    //         ->update(['name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'gender'=>$gender, 'status'=>$status, 'driver_id'=>$driver_id, 'driver_id_image'=>$imageName]);
    //         return redirect()->action([AccountController::class, 'index']);
    //     return redirect('profiles.index', compact('user','user_id'));
    // }
}
