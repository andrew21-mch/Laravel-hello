<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function fetchData(Request $reques)
    {
        return User::all();
    }
}
