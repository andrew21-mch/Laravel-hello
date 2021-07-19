<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function greet($name){
        echo "hello $name this is a test on controllers";
    }
}
