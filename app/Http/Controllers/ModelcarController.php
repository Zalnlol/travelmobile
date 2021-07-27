<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ModelCar;
use Illuminate\Http\Request;
use App\Models\CarMFG;
use Illuminate\Support\Str;

class ModelcarController extends Controller
{
    public function index()
    {
        $model = ModelCar::all();
        return view('Admin-Model.model-index', compact('model'));
    }
    public function create() {
<<<<<<< HEAD
        $mfg = CarMFG::all();
        return view('Admin-Rental.model-create',compact('mfg'));
=======
        return view('Admin-Model.model-create');
>>>>>>> 7e2ecc762558d554e5bb40ad7114f6be0f2d2ea2
    }
//     public function store(Request $request)
// {
//     $validatedData = $request->validate([
//         'type_id' => 'required',
//         'mfg_id' => 'required',
//         'model' => 'required',
//         'suggest_price' => 'required',
//         'fuel_type' => 'required',
//         'seatnum' => 'required',
//         'car_style' => 'required',
        
//     ]);
// }
    public function postCreate(Request $request) {
         //validate
        $request->validate([
            'mfg_id' => 'bail|required',
            'model' => 'bail|unique:tb_car_type|required',
            'suggest_price' => 'bail|required',
            'fuel_type' => 'bail|required',
            'seatnum' => 'bail|required|integer',
            'car_style' => 'bail|required',
            
        ]);
        // nhận tất cả tham số vào mảng product

        $model = $request->all();
        $p = new ModelCar($model);
        $p->save();
        return redirect()->action('ModelcarController@index');
        }
<<<<<<< HEAD
//         public function messages()
// {
//     return [
//         'type_id.required' => ' Mã model xe không được để trống',
//         'type_id.unique:tb_car_type' => ' Mã model xe đã tồn tại',
//         'mfg_id.required' => 'Hãng xe không để để trống',
//         'fuel_type.required' => 'Loại nhiên liệu không được để trống',
//         'model.required' => ' Model xe không được để trống',
//         'model.unique:tb_car_type' => ' Model xe đã tồn tại',
//         'suggest_price.required' => ' Giá đề xuất không được để trống',
//         'seatnum.required' => ' Số chỗ ngồi không được để trống',
//         'car_style.required' => ' Kiểu dáng xe không được để trống',
//         'seatnum.integer' => ' Số chỗ ngồi phải là số nguyên',

//     ];
// }
    public function update($type_id) {
            $mfg = CarMFG::all();
            $m = ModelCar::find($type_id);
            return view('Admin-Rental.model-update', ['m'=> $m,'mfg'=>$mfg]);
=======
        public function update($type_id) {
            $p = ModelCar::find($type_id);
            return view('Admin-Model.model-update', ['p'=>$p]);
>>>>>>> 7e2ecc762558d554e5bb40ad7114f6be0f2d2ea2
        }
    public function postUpdate(Request $request,$type_id) {
        
        //
        $request->validate([
            'type_id' => 'bail|required',
            'mfg_id' => 'bail|required',
            'model' => 'bail|required',
            'suggest_price' => 'bail|required|integer|min:250',
            'fuel_type' => 'bail|required',
            'seatnum' => 'bail|required|integer|between:2,16',
            'car_style' => 'bail|required',
            
        ]);
        //   
        // $model = $request->all();    
        $m = ModelCar::find($type_id);
        $m->mfg_id = $request->mfg_id;
        $m->model = $request->model ;
        $m->suggest_price = $request->suggest_price ;
        $m->fuel_type = $request->fuel_type ;
        $m->car_style = $request->car_style ;

        $m->save();
            // $model = ModelCar::find($type_id);
            // $model->mfg_id = $request->mfg_id; 
            // $model->model = $request->model;
            // $model->suggest_price = $request->suggest_price;
            // $model->fuel_type = $request->fuel_type;
            // $model->seatnum = $request->seatnum;
            // $model->car_style = $request->car_style;   
            // $model->save();
            return redirect()->action('ModelcarController@index');
        }
    public function delete($type_id) {
                $p = ModelCar::find($type_id);
                $p->delete();
            return redirect()->action('ModelcarController@index');
        }
        

    
}
