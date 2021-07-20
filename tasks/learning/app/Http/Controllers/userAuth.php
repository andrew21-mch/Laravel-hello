<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    public function userLogin(Request $request)
    {
        return $request->input();
    }
}
