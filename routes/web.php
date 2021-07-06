<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index', [UserController::class,"index"]);
Route::get('user/create', [UserController::class, "create"]);
Route::post('user/postCreate', [UserController::class, "postCreate"]);
Route::get('user/update/{id}', [UserController::class, "update"]);
Route::post('user/postUpdate/{id}', [UserController::class, "postUpdate"]);
Route::get('user/delete/{id}', [UserController::class, "delete"]);
