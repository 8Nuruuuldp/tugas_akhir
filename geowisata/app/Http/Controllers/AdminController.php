<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Kontak;

class AdminController extends Controller
{

    // foreach search admin
    public function dashboard(){

        $kontak = Kontak::all();
        return view('admin.dashboard', [
            'wisata'=> Wisata::all(),
            'kategori'=> Kategori::all(),
            'table_kontak'=> $kontak
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
