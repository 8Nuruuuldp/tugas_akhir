<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;

class AdminController extends Controller
{

    // foreach search admin
    public function dashboard(){


        return view('admin.dashboard', [
            'wisata'=> Wisata::all(),
            'kategori'=> Kategori::all()
        ]);
    }

     //foreach search welcome
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
         // pencarian dalam tabel
        $wisata = Wisata::where('nama_tempat', 'like', '%' . $keyword . '%')->get();

        return response()->json($wisata);
    }
}
