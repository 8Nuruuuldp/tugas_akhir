<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $results=$this->Wiasata->kategoriAll();
        return view('welcome',['kategorilokasi'=>$results]);
    }
}
