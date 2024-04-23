<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view ('datawisata', [
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post',[
            "post" => Post::find($slug)
        ]);
    }

}
