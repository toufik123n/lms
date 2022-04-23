<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $userInfo=$request->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with('msg','Login Successful.');
        }
        return redirect()->back()->with('msg','Invalid User Email or Password!');
    }

    public function doLogout(){
        Auth::logout();
        return redirect()->route('login')->with('msg','Logout Successful.');
    }
}
