<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{


   public function listAll(User $users)
   {
      $users = User::all();
      return view('listagem',['users'=>$users]);
   }

   public function listSingle(User $user)
   {
      return view('singleList',['user'=>$user]);
   }

   public function  create()
   {
     return view('userForm');
   }

   public function store(Request $request,User $users){

         $users -> name = $request -> name;
         $users -> email = $request -> email;
         $users -> password = Hash::make($request -> senha);
         $users -> save();

         return redirect() -> route('users.listAll');
   }

   public function update(User $user){
         return view('userUpdate',['user'=>$user]);
   }

   public function edit(User $user,Request $request)
   {

        $user -> name = $request -> name;
        
        if(filter_var($request -> email,FILTER_VALIDATE_EMAIL)){
         $user -> email = $request -> email;
        }

        if(!empty($request -> senha)){
         $user -> password = Hash::make($request -> senha); 
        }
        
        $user -> save();

        return redirect()->route('users.listAll');
   }

   public function destroy(User $user)
   {
      $user -> delete();
      return redirect()->route('users.listAll');
   }


}
