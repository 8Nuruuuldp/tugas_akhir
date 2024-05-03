<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
            $result=$this->Kategori->allKategori();
            return view('welcome', ['kategori'=>$result]);
    }

    // public function show(Wisata $post)
    // {
    //     return view('post',[
    //         "post" => $post
    //     ]);
    //     }

}
