<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SocialAuthFacebookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

// Route ben ngoai

Route::get('/', function () {
    return view('index');
});


Route::get('/login', [AccountController::class, "login"]);
Route::post('/checklogin', [AccountController::class, "checkLogin"]);
Route::get('/logout', [AccountController::class, "logout"]);
Route::get('/register', [AccountController::class, "register"]);




// -----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------


//Route cho admin
Route::get('/admin', function () {
    return view('AdminHome');
});
Route::get('user/index', [UserController::class, "index"]);
Route::get('user/create', [UserController::class, "create"]);
Route::post('user/postCreate', [UserController::class, "postCreate"]);
Route::get('user/update/{id}', [UserController::class, "update"]);
Route::post('user/postUpdate/{id}', [UserController::class, "postUpdate"]);
Route::get('user/delete/{id}', [UserController::class, "delete"]);




Route::prefix('admin')->name('admin')->middleware('checkLogin:admin')->group(function () {
    Route::get('users', [AccountController::class, "index"])->name('userlist');
    Route::get('create', [AccountController::class, "create"]);
    Route::post('post', [AccountController::class, "postCreate"]);
    Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);



});


Route::get('rental', 'RentalController@index')->name('rental');
Route::get('rental/view/{id}', 'RentalController@view')->name('rental.view');
Route::post('rental/approval/{id}', 'RentalController@approval')->name('rental.approval');
Route::get('rental/delete/{id}', 'RentalController@delete')->name('rental.delete');


//Route login Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

// -----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------

Route::get('/redirect', [SocialAuthFacebookController::class, "redirect"]);
Route::get('/callback', [SocialAuthFacebookController::class, "callback"]);

// -----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------



//Route cho user
Route::prefix('user')->name('user')->middleware('checkLogin:admin,user')->group(function () {
    Route::get('profile/{id}', [AccountController::class, "details"]);

});

Route::get('mycar', 'MyCarController@index');
Route::get('mycar/rental', 'MyCarController@create')->name('rental.create');
Route::post('mycar/checkRental', 'MyCarController@store')->name('rental.store');
Route::get('mycar/view/{id}', 'MyCarController@view')->name('rental.view');
Route::get('mycar/update/{id}', 'MyCarController@update')->name('rental.update');
Route::post('mycar/edit/{id}', 'MyCarController@edit')->name('rental.edit');
Route::get('mycar/delete/{id}', 'MyCarController@delete')->name('rental.delete');





// -----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------

//Route de test


Route::get('/searchcar', function () {
    return view('user/searchcar');
});
