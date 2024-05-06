<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;

class AdminController extends Controller
{


    public function dashboard(){


        return view('admin.dashboard', [
            'wisata'=> Wisata::all(),
            'kategori'=> Kategori::all()
        ]);
    }
}
