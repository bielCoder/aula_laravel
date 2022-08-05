<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function listUser(){
        // $users -> name = "Gabriel Henrique";
        // $users -> email = "gabriel@gmail.com";
        // $users -> password = Hash::make('123');
        // $users -> save();
       
       $users = User::where('id',1)->first();
       // dd($users);
       return view('listUser',['user' => $users]);
    }
}
