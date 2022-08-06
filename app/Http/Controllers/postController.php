<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    // except ,only ,all
    public function debug(Request $request,Post $post)
    {
        
        $post -> create(
            $request->except(['_token'])
        );

        // $post -> title = $request -> title;
        // $post -> subtitle = $request -> subtitle;
        // $post -> content = $request -> content;
        // $post -> save();

        dd($post);
    }  
}
