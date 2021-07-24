<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MGFCarController;
use App\Http\Controllers\SearchCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcomeMail;
use App\Http\Controllers\FbController;
use App\Http\Controllers\GoogleLogin;
use App\Http\Controllers\RentalContract;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\BlogController;

use App\Models\RentalContract as ModelsRentalContract;
use App\Models\RentalSchedule;
use App\Models\CarRental;
use App\Models\CarPic;
use App\Models\CarMFG;
use App\Models\CarType;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});



Route::get('user/index',[AccountController::class,"index"]);
Route::get('user/create',[AccountController::class,"create"]);
Route::post('user/postCreate', [AccountController::class, "postCreate"]);
Route::get('user/update/{id}', [AccountController::class, "update"]);
Route::post('user/postUpdate/{id}', [AccountController::class, "postUpdate"]);
Route::get('user/delete/{id}', [AccountController::class, "delete"]);




Route::get('/admin', function () {
    return view('AdminHome');
});
// Route::get('user/index', [UserController::class, "index"]);
// Route::get('user/create', [UserController::class, "create"]);
// Route::post('user/postCreate', [UserController::class, "postCreate"]);
// Route::get('user/update/{id}', [UserController::class, "update"]);
// Route::post('user/postUpdate/{id}', [UserController::class, "postUpdate"]);
// Route::get('user/delete/{id}', [UserController::class, "delete"]);


//Route cho user
// Route::prefix('user')->name('user')->middleware('checkLogin:admin,user')->group(function(){
//     Route::get('profile/{id}',[AccountController::class,"details"]);    
// });


//Route cho admin
// Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
  Route::prefix('admin')->name('admin.')/*->middleware('isAdmin')*/->group(function(){
    Route::get('users', [AccountController::class,"index"])->name('userlist');
    Route::get('create', [AccountController::class, "create"]);
    Route::post('post', [AccountController::class, "postCreate"]);
    Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);

    Route::get('rental', 'RentalController@index')->name('rental');
    Route::get('active-rental', 'RentalController@active')->name('active-rental');
    Route::get('deny-rental', 'RentalController@deny')->name('deny-rental');
    Route::get('rental/view/{car_id}', 'RentalController@view')->name('rental.view');
    Route::post('rental/approval/{car_id}', 'RentalController@approval')->name('rental.approval');
    Route::get('rental/delete/{car_id}', 'RentalController@delete')->name('rental.delete');

    Route::get('mfg',[MGFCarController::class, "index"])->name('mfg-index');
    Route::get('mfg/create','MGFCarController@create')->name('mfg-create');
    Route::post('mfg/postCreate','MGFCarController@postCreate')->name('mfg-post-create');
    Route::get('mfg/update/{mfg_id}', 'MGFCarController@update')->name('mfg-update');
    Route::post('mfg/postUpdate/{mfg_id}','MGFCarController@postUpdate');
    Route::get('mfg/delete/{mfg_id}', 'MGFCarController@delete')->name('mfg-delete');

    Route::get('model','ModelcarController@index')->name('model-index');
    Route::get('model/create','ModelcarController@create')->name('model-create');
    Route::post('model/postCreate','ModelcarController@postCreate')->name('model-post-create');
    Route::get('model/update/{type_id}', 'ModelcarController@update')->name('model-update');
    Route::post('model/postUpdate/{type_id}','ModelcarController@postUpdate');
    Route::get('model/delete/{type_id}', 'ModelcarController@delete')->name('model-delete');
// });
  });

//----------------------------------------------------------------------------------------------------------
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Route user view profile or edit profile
Route::get('/profile',[ProfilesController::class,"viewSelfProfile"])->name('profiles.show');
Route::get('/profile/{user}',[ProfilesController::class,"index"])->name('profiles.show');
Route::get('/profile/{user}/edit',[ProfilesController::class,"edit"])->name('profiles.edit');
Route::patch('/profile/{user}',[ProfilesController::class,"update"])->name('profiles.update');

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});
//----------------------------------------------------------------------------------------------------------
Route::get('mycar', 'MyCarController@index');
Route::get('mycar/rental', 'MyCarController@create')->name('rental.create');
Route::get('mycar/newrental', 'MyCarController@create1');
Route::post('mycar/checkRental', 'MyCarController@store')->name('rental.store');
Route::get('mycar/update/{car_id}', 'MyCarController@update')->name('rental.update');

Route::post('mycar/edit', 'MyCarController@edit')->name('rental.edit');
Route::get('mycar/delete/{car_id}', 'MyCarController@delete')->name('rental.delete');
Route::get('mycar/image', 'MyCarController@image')->name('rental.image');
Route::get('mycar/image/upload', 'MyCarController@upload')->name('rental.upload');
Route::post('mycar/image/checkUpload', 'MyCarController@checkUpload')->name('rental.checkUpload');
Route::get('mycar/rental/image/update/{car_id}', 'MyCarController@updateImage')->name('rental.image.update');
Route::post('mycar/rental/image/checkUpdate/{car_id}', 'MyCarController@checkupdateImage')->name('rental.image.checkupdate');

Route::get('review', 'ReviewController@index')->name('review');
Route::post('review/post', 'ReviewController@store')->name('review.post');


Route::get('/searchcar', function () {
    return view('user/searchcar');
});


//----------------------------------------------------------------------------------------------------------
//Facebook login
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
//Google login
Route::get('google',function(){
    return view('googleAuth');
});
Route::get('auth/google', [GoogleLogin::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLogin::class, 'handleGoogleCallback']);
//----------------------------------------------------------------------------------------------------------
//Phân chia login admin

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



//----------------------------------------------------------------------------------------------------------

// Route::get('/user-profile', function () {
//     return view('user-profile');
// });




//Search car

Route::get('/searchcar', [SearchCar::class, "search"])->name("searchcar");
Route::get('/searchcar/filter', [SearchCar::class, "filter"])->name("filter");


Route::get('/searchcar/profile', [RentalContract::class, "carprofile"])->name("carprofile");
Route::post('/searchcar/profile/checkout', [RentalContract::class, "checkout"])->name("carprofile");


//mytrip
Route::post('/mytrips', [RentalContract::class, "mytrips"])->name("mytrips");
//mytrip sau khi thanh toán
Route::post('/user/mytrip', [RentalContract::class, "mytrip"])->name("mytrip");

//mytrip bình thường
Route::get('/user/mytrips', [RentalContract::class, "mytrips"])->name("mytrips");


//Form hủy chuyến
Route::get('/user/mytrips/cancell/{id}', function ($id) {

    return view('profiles.formreport',compact('id'));
})->name("formcancell");
Route::post('/user/mytrips/cancell',  [RentalContract::class, "cencelform"])->name("formcancell");

//Lich sử chuyến đi
Route::get('/user/triphistory', [RentalContract::class, "historytrip"])->name("triphistory");
//Xóa lịch sử
Route::get('/user/triphistory/delete/{id}',[RentalContract::class, "delete"]);
//Danh sách chuyến
Route::get('/user/mycars/triplist',[RentalContract::class, "triplist"])->name("triplist");

//Mycars

Route::get('/user/mycars', function (Request $request) {

    $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    $mycar = CarRental::where('user_id', $data)->get();
    return view('profiles.Mycars', compact('mycar'));

});

Route::get('/user/mycars/register', function (Request $request) {

    $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    return view('profiles.registercar', compact('data'));

});


Route::get('/user/mycars/triplist/xacnhan/{id}', function ($id) {

    // Đang liên hệ

    $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
    $post['status']="Đang liên hệ";
    $post->save();

    $post= RentalSchedule::where('id_rental_contract',$id)->get()->first();
    $post['status']="Đang giao xe";
    $post->save();

    return redirect()->route('triplist');
});

Route::get('/user/mycars/triplist/dagiaoxe/{id}', function ($id) {

    // Đang liên hệ

    $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
    $post['status']="Đang trong chuyến";
    $post->save();

    $post= RentalSchedule::where('id_rental_contract',$id)->get()->first();
    $post['status']="Đang cho thuê";
    $post->save();

    return redirect()->route('triplist');
});

Route::get('/user/mycars/triplist/danhanxe/{id}', function ($id) {



    $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
    $post['status']="Đã hoàn thành";
    $post->save();

     RentalSchedule::where('id_rental_contract',$id)->delete();


    return redirect()->route('triplist');
});



//Lịch sử cho thuê 
Route::get('/user/mycars/history',[RentalContract::class, "historyforrental"])->name("historyforrental");
Route::get('/user/mycars/triplist/xemchitiet/{id}', [RentalContract::class, "detailsrental"]);



//Test 


Route::get('/refund','CheckoutController@checkout');
Route::get('/test', function(){
    return view('refund');
});


Route::get('/user/mycars/rental', function(){
    return view('profiles.pagerental');
});

//blog
Route::get('/blog', [BlogController::class,"blog"]);
Route::get('/admin/blog', [BlogController::class,"get"]);
Route::get('/admin/blog/createBlog',[BlogController::class,'createBlog']);
Route::post('/admin/blog/postCreateBlog',[BlogController::class,'postCreateBlog']);
Route::get('/admin/blog/editBlog/{blog_id}',[BlogController::class,'editBlog']);
Route::post('/admin/blog/editPostBlog',[BlogController::class,'editPostBlog']);
Route::get('/admin/blog/delete/{blog_id}',[BlogController::class,'deleteBlog']);
