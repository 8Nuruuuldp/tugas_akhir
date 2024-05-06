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
            return view('welcome', [
                'kategori'=> Kategori::all(),
                'wisata'=> Wisata::all()

            ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Lakukan pencarian dalam tabel Anda, misalnya menggunakan Eloquent
        $wisata = Wisata::where('nama_tempat', 'like', '%' . $keyword . '%')->get();

        return response()->json($wisata);
    }


    // public function show(Wisata $post)
    // {
    //     return view('post',[
    //         "post" => $post
    //     ]);
    //     }

    // public function search()
    // {
    //     $data = array (
    //         'welcome' => $this->table_wisata->get_all_data(),
    //         'isi' => 'welcome'
    //     );
    //     $this->load->view('welcome', $data, FALSE);
    // }
}
