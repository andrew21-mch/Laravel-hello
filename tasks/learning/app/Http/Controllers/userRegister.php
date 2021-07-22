<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userRegister extends Controller
{
    public function register(Request $request){

        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
       $data = $request->input('username');
       $request->session()->flash('username',$data);
       
       $user = new User;
       $user->username=$request->username;
       $user->password=$request->password;
       $user->user_email=$request->email;
       $user->save();

       
       return redirect('register');

    }
}
