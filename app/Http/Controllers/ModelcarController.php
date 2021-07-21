<?php

namespace App\Http\Controllers;

use App\Models\ModelCar;
use Illuminate\Http\Request;

class ModelcarController extends Controller
{
    public function index()
    {
        $model = ModelCar::all();
        return view('Admin-Model.model-index', compact('model'));
    }
    public function create() {
        return view('Admin-Model.model-create');
    }
    public function postCreate(Request $request) {
        // nhận tất cả tham số vào mảng product
        $model = $request->all();
        // xử lý upload hình vào thư mục
        
        $p = new ModelCar($model);
        
        $p->save();
        
        
        return redirect()->action('ModelcarController@index');
        }
        public function update($type_id) {
            $p = ModelCar::find($type_id);
            return view('Admin-Model.model-update', ['p'=>$p]);
        }
        public function postUpdate(Request $request, $type_id) {
            $model = $request->all();
            $p = new ModelCar($model);
            
            $p->save();
            return redirect()->action('ModelcarController@index');
        }
        public function delete($type_id) {
            $p = ModelCar::find($type_id);
            $p->delete();
            return redirect()->action('ModelcarController@index');
        }
        

    
}
