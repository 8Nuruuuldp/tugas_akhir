<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $results=$this->Wisata->kategoriAll();
        return view('welcome',['kategorilokasi'=>$results]);
    }
}
