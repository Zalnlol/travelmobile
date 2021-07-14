<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcomeMail;


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
Route::get('/searchcar', function () {
    return view('User/searchcar');
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
    Route::get('users', [AccountController::class,"index"])->name('userlist');
    Route::get('create', [AccountController::class, "create"]);
    Route::post('post', [AccountController::class, "postCreate"]);
    Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);



    Route::get('rental', 'RentalController@index')->name('rental');
    Route::get('rental/view/{car_id}', 'RentalController@view')->name('rental.view');
    Route::post('rental/approval/{car_id}', 'RentalController@approval')->name('rental.approval');
    Route::get('rental/delete/{car_id}', 'RentalController@delete')->name('rental.delete');

});

//----------------------------------------------------------------------------------------------------------
//Route Thiện đang làm, DO NOT TOUCH
// Route::get('/profile/{user}',[ProfileController::class,"index"])->name('profile.show');
// Route::get('/profile/{user}/edit',[ProfileController::class,"edit"])->name('profile.edit');

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});
//----------------------------------------------------------------------------------------------------------
Route::get('mycar', 'MyCarController@index');
Route::get('mycar/rental', 'MyCarController@create')->name('rental.create');
Route::post('mycar/checkRental', 'MyCarController@store')->name('rental.store');
Route::get('mycar/view/{car_id}', 'MyCarController@view')->name('rental.view');
Route::get('mycar/update/{car_id}', 'MyCarController@update')->name('rental.update');

Route::post('mycar/edit', 'MyCarController@edit')->name('rental.edit');
Route::get('mycar/delete/{car_id}', 'MyCarController@delete')->name('rental.delete');
Route::get('mycar/image', 'MyCarController@image')->name('rental.image');
Route::get('mycar/image/upload', 'MyCarController@upload')->name('rental.upload');
Route::post('mycar/image/checkUpload', 'MyCarController@checkUpload')->name('rental.checkUpload');

Auth::routes();

Route::get('/searchcar', function () {
    return view('user/searchcar');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
