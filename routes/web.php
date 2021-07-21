<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SearchCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcomeMail;
use App\Http\Controllers\FbController;
use App\Http\Controllers\GoogleLogin;
use App\Http\Controllers\RentalContract;


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


Route::get('/login', [AccountController::class, "login"]);
Route::post('/checklogin', [AccountController::class, "checkLogin"]);
Route::get('/logout', [AccountController::class, "logout"]);
Route::get('/register', [AccountController::class, "register"]);




Route::get('/admin', function () {
    return view('AdminHome');
});
Route::get('user/index', [UserController::class, "index"]);
Route::get('user/create', [UserController::class, "create"]);
Route::post('user/postCreate', [UserController::class, "postCreate"]);
Route::get('user/update/{id}', [UserController::class, "update"]);
Route::post('user/postUpdate/{id}', [UserController::class, "postUpdate"]);
Route::get('user/delete/{id}', [UserController::class, "delete"]);


//Route cho user
Route::prefix('user')->name('user')->middleware('checkLogin:admin,user')->group(function(){
    Route::get('profile/{id}',[AccountController::class,"details"]);    
});


//Route cho admin
Route::prefix('admin')->name('admin.')->/*middleware('checkLogin:admin')->*/group(function(){
    // Route::get('users', [AccountController::class,"index"])->name('userlist');
    // Route::get('create', [AccountController::class, "create"]);
    // Route::post('post', [AccountController::class, "postCreate"]);
    // Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);

    Route::get('rental', 'RentalController@index')->name('rental');
    Route::get('active-rental', 'RentalController@active')->name('active-rental');
    Route::get('deny-rental', 'RentalController@deny')->name('deny-rental');
    Route::get('rental/view/{car_id}', 'RentalController@view')->name('rental.view');
    Route::post('rental/approval/{car_id}', 'RentalController@approval')->name('rental.approval');
    Route::get('rental/delete/{car_id}', 'RentalController@delete')->name('rental.delete');

    Route::get('mfg','MGFCarController@index')->name('mfg-index');
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
});

//----------------------------------------------------------------------------------------------------------
//Route user view profile or edit profile
Route::get('/profile/{user}',[ProfilesController::class,"index"])->name('profile.show');
Route::get('/profile/{user}/edit',[ProfilesController::class,"edit"])->name('profile.edit');
// Route::get('/profile/{user}',[ProfilesController::class,"update"])->name('profile.update');

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

Route::get('review', 'ReviewController@index')->name('review');
Route::post('review/post', 'ReviewController@store')->name('review.post');

Auth::routes();

Route::get('/searchcar', function () {
    return view('user/searchcar');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

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


//Test 

Route::get('/test', [SearchCar::class, "testajax1"])->name("test");
