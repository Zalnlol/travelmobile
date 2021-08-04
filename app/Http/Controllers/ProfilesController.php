<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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


    public function edit(Request  $request, User $user)
    {   

        $user_id=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        if($user['user_id']!= $user_id){
            return redirect()->action([ProfilesController::class, 'viewSelfProfile']);
        }

        return view('profiles.edit', compact('user', 'user_id'));
    }

    // WIP
    public function update(Request  $request ,User $user)
    {   
        $user_id = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $searchinfo= $request->all();
        // dd($searchinfo);

        $name = $request->input('name');
        $email = $request->input('email');
        $avatar_image = $request->input('avatar_image');
        $mobile = $request->input('mobile');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $driver_id = $request->input('driver_id');

        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'avatar_image' => '',
            'mobile' => ['required', 'digits_between:10,11'],
            'dob' => 'required|date|before_or_equal:'.\Carbon\Carbon::now()->subYears(18)->format('d-m-Y'),
            'gender' => 'required',
            'driver_id' => 'alpha_num',
            'driver_id_image' => '',
        ]);

        // dd($user_id);
        //Xử lý upload ảnh đại diện hình vào thư mục
        if($request->hasFile('avatar_image')){
            $file=$request->file('avatar_image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect()->action([ProfilesController::class, 'edit'])->width('Lỗi', ' Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $avatar_image = $file->getClientOriginalName();
            $file->move("img",$avatar_image);
        } else {//Không upload hình mới => giữ lại hình cũ
            $user = DB::table('tb_user')
                    ->where('user_id',intval($user_id))
                    ->first();
                    $avatar_image = $user->avatar_image;
        }
        //Xử lý upload ảnh GPLX hình vào thư mục
        if($request->hasFile('driver_id_image')){
            $file=$request->file('driver_id_image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect()->action([ProfilesController::class, 'edit'])->width('Lỗi', ' Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/img",$imageName);
        } else {//Không upload hình mới => giữ lại hình cũ
            $user = DB::table('tb_user')
                    ->where('user_id',intval($user_id))
                    ->first();
                    $imageName = $user->driver_id_image;
        }
        $user = DB::table('tb_user')
            ->where('user_id',intval($user_id))
            ->update(['name'=>$name, 'email'=>$email,'avatar_image'=>$avatar_image, 'dob'=>$dob, 'mobile'=>$mobile, 'gender'=>$gender,  'driver_id'=>$driver_id, 'driver_id_image'=>$imageName]);
            return redirect()->action([ProfilesController::class, 'viewSelfProfile']);
        return redirect('profiles.index', compact('user','user_id'));
    }
}
