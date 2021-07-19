<?php

namespace App\Http\Controllers;

use App\Models\ModelCar;
use Illuminate\Http\Request;

class ModelcarController extends Controller
{
    public function index()
    {
        $model = ModelCar::all();
        return view('Admin-Rental.model-index', compact('model'));
    }
    public function create() {
        return view('Admin-Rental.model-create');
    }
    public function postCreate(Request $request) {
        // nhận tất cả tham số vào mảng product
        $model = $request->all();
        // xử lý upload hình vào thư mục
        if($request->hasFile('image'))
        {
        $file=$request->file('image');
        $extension = $file->getClientOriginalExtension();
        if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
        {
        return redirect('product/create')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
        }
        $imageName = $file->getClientOriginalName();
        $file->move("images",$imageName);
        }
        else
        {
        $imageName = null;
        }
        $p = new ModelCar($model);
        $p->image = $imageName;
        $p->save();
        
        
        return redirect()->action('ModelcarController@index');
        }
        

    
}
