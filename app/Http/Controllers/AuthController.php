<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('form');
    }

    public function auth(Request $request)
    {
        
        if(Auth::attempt(['email' => $request -> email,'password' => $request -> password])){
            return redirect()->route('main');
        }else{
            return redirect()->back()->with('msg','Dados Invalidos.');
        }

    }

    public function index()
    {
        if(Auth::check()){
        return view('dashboard');
        }else{
        return view('form');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect() -> route('login');
    }

}
        


