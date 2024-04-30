<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;

use App\Http\Controllers\Controller;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->Wisata=new Wisata();
    }
    //KAlO KALIAN LIAT INI MERAH SANTAI DULU AJA YAA SELAGI POINT MARKERNYA JALAN
    //BIAR AKU CARI CARA LAIN LAGI BIAR BISA KE BACA DI MAPNYA

    public function wisata(){
        $result=$this->Wisata->all();
        return json_encode($result);
    }

    public function index()
    {

        $wisata = Wisata::all();
        return view('admin.wisata.index', compact('wisata'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Wisata::create([
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect('/wisata')->with('toast_success', 'Data berhasil disimpan!');
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
    public function edit(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        $wisata->update($request->all());
        $wisata->save();

        return redirect('/wisata')->with('toast_success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();

        return redirect()->back()->with('toast_success', 'Data berhasil dihapus!');
    }


}
