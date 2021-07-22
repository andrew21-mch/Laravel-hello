<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class memberController extends Controller
{
    public function show(){
        $data = User::paginate(25);
        return view('allusers',['users'=>$data]);

    }
}
