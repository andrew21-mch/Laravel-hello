<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    /*public function userLogin(Request $request)
    {
        $data = $request->input();
        $request->session()->put('name',$data['name']);
        echo session('name');
    }*/
    public function Login(Request $login)
    {
        $datas = $login->input();
        if(($datas['name']=='andrew') && ($datas['pass']=='tata111'))
        {
            $login->session()->put('name',$datas['name']);
            return redirect('user');
        }
        else{
            return redirect('login');
        }
    }
}
