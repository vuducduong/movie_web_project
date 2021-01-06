<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
            return view('font-end.login-sign-up.login');
    }

    public function storeAdminLogin(Request $request){
            $admin = [
                    'email' => $request->email,
                    'password'=>$request->password,
            ];
            if(!Auth::attempt($admin)){
                return redirect()->route('login')->with('messageError', 'Email or Password is correct!');
            }
            else{
                return redirect()->route('movies.list');
            }
    }
    public function userLogin(Request $request){
            $user = [
              'email'=>$request->email,
              'password'=>$request->password,
            ];
            if(!Auth::attempt($user)){
                return redirect()->route('login')->with('messageError','Email or Password is correct !');
            }
            else{
                return redirect()->route('movie-fontEnd.index');
            }
    }
}
