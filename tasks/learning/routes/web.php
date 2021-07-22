<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\userRegister;

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
Route::get('/logout', function () {
    if(session()->has('username')){
        session()->pull('username');
    }
    return redirect('login');
});

Route::get('/login', function () {
    if(session()->has('username')){
        return redirect('user');
    }
    else{
        return view('login');
    }
});
//upload file
Route::view('uploadprofile','uploadprofile');
Route::post('uploadprofile',[uploadController::class, 'Upload']);

//see registered users
//Route::view('allusers','allusers');
Route::get('users', [memberController::class, 'show']);


//Route::view('/login', 'login');
Route::view('/dashboard','user');


//for login
Route::post('login',[userAuth::class, 'userLogin']);
Route::get('user', [userController::class,'fetchData']);

//register users
Route::view('register','register');
Route::post('register',[userRegister::class, 'register']);