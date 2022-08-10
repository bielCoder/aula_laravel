<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showForm()
    {
        return view('showForm');
    }

    public function formStore(Request $request)
    {
        // dd($request->except('_token'));

        $posts = new Post; 


        // $posts -> title = $request -> title;
        // $posts -> subtitle = $request -> subtitle;
        // $posts -> content = $request -> content;

        // $posts -> save();

        $posts -> create($request ->except(['_token']));

        return redirect()->route('form');
    }   
}
