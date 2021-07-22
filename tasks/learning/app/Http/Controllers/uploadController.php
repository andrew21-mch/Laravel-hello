<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function Upload(Request $request){
        return $request->file('file')->store('docs'); 
    }
}
