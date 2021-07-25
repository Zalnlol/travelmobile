<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarMFG;
class MGFCarController extends Controller
{
    public function index()
    {
        $mfg = CarMFG::all();
        return view('Admin-MFG.mfg-index', compact('mfg'));
    }

    public function create()
    {
        return view('Admin-MFG.mfg-create');
    }

    public function postCreate(Request $request) {
        // nhận tất cả tham số vào mảng product
        $mfg = $request->all();
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
            $logoName = null;
        }
        $p = new CarMFG($mfg);
        $p->logo = $logoName;
        $p->save();
        return redirect()->action('MGFCarController@index');
    }
    
    public function update($mfg_id) {
        $p = CarMFG::find($mfg_id);
        return view('Admin-MFG.mfg-update', ['p'=>$p]);
    }
    public function postUpdate(Request $request, $mfg_id) {
        $mfg = $request->all();
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
            $p = CarMFG::find($mfg_id);
            $logoName = $p->logo;
        }
        $p = new CarMFG($mfg);
        $p->logo = $logoName;
        $p->save();
        return redirect()->action('MGFCarController@index');
    }

    }

