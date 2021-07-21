<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    public function userLogin(Request $request){
        $request->validate([
            'username' =>'required | max:10',
            'password' =>'required | min:5',
        ]);
        $data = $request->input();
        if($data['username']=='drew98' && $data['password']=='password'){
            return redirect('dashboard');
        }
        else{
            return redirect('login');
        }
    }
}
