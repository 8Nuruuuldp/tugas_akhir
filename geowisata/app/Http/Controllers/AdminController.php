<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class AdminController extends Controller
{


    public function dashboard(){
        $admin = Wisata::latest();

        if(request('search')) {
            $admin->where('nama_tempat', 'like', '%' . request('search') . '%');
        }


        return view('admin.dashboard', [
            "admin.dashboard" => $admin->get()
        ]);
    }
}
