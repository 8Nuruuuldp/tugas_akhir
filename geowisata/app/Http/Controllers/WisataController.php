<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::all(); 
        return view('admin.wisata.index',['table_wisata'=>$wisata]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisata = Wisata::find($id);
        return view('admin.wisata.edit',['wisata' => $wisata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_tempat' => 'required',
            'alamat'    => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required',
            'latitude'  => 'required',
            'longitude' => 'required'
        ]);

        $wisata = Wisata::find($id);
        $wisata->nama_tempat    = $request->nama_tempat;
        $wisata->alamat     = $request->alamat;
        $wisata->deskripsi  = $request->deskripsi;
        $wisata->gambar     = $request->gambar;
        $wisata->latitude   = $request->latitude;
        $wisata->longitude  = $request->longitude;

        $wisata->save();

        return redirect('/wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
