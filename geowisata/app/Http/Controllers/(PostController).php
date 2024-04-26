<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {

        return view ('data/datawisata', [
            "posts" => Data::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Data $post)
    {
        return view('post',[
            "post" => $post
        ]);
        }

}
