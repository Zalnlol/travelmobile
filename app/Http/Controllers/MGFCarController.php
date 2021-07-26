<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarMFG;
class MGFCarController extends Controller
{
    public function index()
    {
        $mfg = CarMFG::all();
        return view('Admin-Rental.mfg-index', compact('mfg'));
    }
    public function create()
    {
        return view('Admin-Rental.mfg-create');
    }
    public function postCreate(Request $request) {
        
        // nhận tất cả tham số vào mảng product
        $mfg = $request->all();
        $request->validate([
            'mfg_id' =>'bail|unique:tb_car_mfg|required|alpha',
            'name' => 'bail|unique:tb_car_mfg|required',
            'nation' => 'bail|required',
            'logo' => 'bail|unique:tb_car_mfg|required',
            'website' => 'bail|required|url'
         ]);
        // xử lý upload hình vào thư mục
        if($request->hasFile('logo'))
        {
            $file=$request->file('logo');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('Admin-Rental.mfg-index')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $logoName = $file->getClientOriginalName();
            $file->move("img/logo",$logoName);
        }
        else
        {
            $logoName = null;
        }
        $p = new CarMFG($mfg);
        $p->logo = $logoName;
        $p->save();
        return redirect()->action('MGFCarController@index');
    }
    public function update($mfg_id) {
        $mfg = CarMFG::find($mfg_id);
        return view('Admin-Rental.mfg-update', ['mfg'=>$mfg]);
    }
    public function postUpdate(Request $request, $mfg_id) {
        
        $request->validate([
            'mfg_id' =>'bail|required|alpha',
            'name' => 'bail|required',
            'nation' => 'bail|required',
            'logo' => 'bail',
            'website' => 'bail|required|url'
         ]);
        // xử lý upload hình vào thư mục
        if($request->hasFile('logo'))
        {
            $file=$request->file('logo');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('product/create')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $logoName = $file->getClientOriginalName();
            $file->move("img/logo",$logoName);
        }
        else
        {
            $mfg = CarMFG::find($mfg_id);
            $logoName = $mfg->logo;
        }
        
        $mfg = CarMFG::find($mfg_id);
        $mfg->name = $request->name;
        $mfg->nation = $request->nation;
        $mfg->website = $request->website;
        $mfg->save();
        return redirect()->action('MGFCarController@index');
    }
    public function delete($mfg_id) {
        $p = CarMFG::find($mfg_id);
        $p->delete();
        return redirect()->action('MGFCarController@index');
    }
    public function show(){
        $mfg = CarMFG::all();
        return view('Admin-Rental.mfgshow',compact('mfg'));
    }
    }

