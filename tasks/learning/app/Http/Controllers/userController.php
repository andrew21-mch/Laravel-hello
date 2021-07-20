<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function testRequest(Request $reques)
    {
        return $reques->input();
    }
}
