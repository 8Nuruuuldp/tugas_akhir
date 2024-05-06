<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class AdminController extends Controller
{


    public function dashboard(){


        return view('admin.dashboard', [
            'wisata'=> Wisata::all()
        ]);
    }
}
