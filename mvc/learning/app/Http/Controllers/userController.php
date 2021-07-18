<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function loadView($name){
        return view('users',['name'=>$name]);
    }
}
