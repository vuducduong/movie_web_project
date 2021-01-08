<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function login(){
            return view('font-end.login-sign-up.login');
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

    public function admin(){
        if (Gate::allows('is-Admin')) {
            return redirect()->route('admin');
        }
        else{
            abort(403);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
