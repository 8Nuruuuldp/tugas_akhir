<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view ('datawisata', [
            "posts" => Data::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "post" => $post
        ]);
    }

}
