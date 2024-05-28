<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Wisata;

class UlasanController extends Controller
{
    public function index()
    {
        // Untuk Halaman Admin
        $ulasan = Ulasan::all();
        $ulasan = Ulasan::with('wisata')->get();
        return view('admin.ulasan.index', ['table_ulasan'=> $ulasan]);
    }

    public function create($wisata_id)
    {
        $wisata = Wisata::findOrFail($wisata_id);
        return view('admin.ulasan.create', compact('wisata'));
        
    }

    public function store(Request $request){

        $this->validate($request,[
            'wisata_id' => 'required|exists:table_wisata,id',
            'nama_pengulas' => 'required',
            'email_pengulas' => 'required',
            'rating' => 'required',
            'ulasan' => 'required',
        ]);

        Ulasan::create([
            'wisata_id' => $request->wisata_id,
            'nama_pengulas' => $request->nama_pengulas,
            'email_pengulas' => $request->email_pengulas,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
        ]);
        return redirect()->route('ulasan.create', ['wisata_id'=>$request->wisata_id])->with('success', 'Ulasan Anda telah terkirim!');

    }


    public function edit(Ulasan $ulasan){

        //

    }


    public function update(UlasanUpdateRequest $request, Ulasan $ulasan){

        //

    }

    public function destroy(UlasanDestroyRequest $request, Ulasan $ulasan){

        //
    
    }
}