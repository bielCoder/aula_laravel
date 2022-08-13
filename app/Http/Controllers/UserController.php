<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user,$id)
    {
        $user = User::where('id',$id)->find($id);

        $address = $user -> address;

        $posts = $user -> posts;

       

        
        return view('index',['user'=>$user,'address'=>$address,'posts'=>$posts]);
    }
}
