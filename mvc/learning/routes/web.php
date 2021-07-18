<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;

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
//calling a controller
//Route::get('users/{name}', [Users::class,'greet']);

//normal routing for views with parametes
//Route::get('/user/{name}',function($name){
   // return view('users', ['name'=>$name]);
//});

//loading view from controller
Route::get('/users/{name}', [userController::class, 'loadView']);