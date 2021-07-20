<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;
use App\Http\Controllers\userAuth;

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
Route::view('user', 'user');
Route::view('login', 'login');
//Route::post("users",[userController::class, 'testRequest']);
Route::post('login', [userAuth::class,'userLogin']);
Route::post('login',[userAuth::class, 'Login']);