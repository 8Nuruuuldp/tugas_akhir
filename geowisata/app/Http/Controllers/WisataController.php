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

    // public function wisatas(){
    //     $results=$this->Wisata->allKategori();
    //     return view('welcome', ['kategori'=>results]);
    // }


    public function index()
    {

        $wisata = Wisata::all();
        $wisata = Wisata::with('kategori')->get();
        return view('admin.wisata.index', compact('wisata'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.wisata.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();

            $wisata = new Wisata;
            $wisata->nama_tempat = $request->nama_tempat;
            $wisata->kategori_id = $request->kategori_id;
            $wisata->alamat = $request->alamat;
            $wisata->gambar = $namaFile;
            $wisata->deskripsi = $request->deskripsi;
            $wisata->latitude = $request->latitude;
            $wisata->longitude = $request->longitude;

            $nm->move(public_path().'/img', $namaFile);
            $wisata->save();

            return redirect('/wisata')->with('success', 'Data berhasil disimpan!');
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
        $wisata = Wisata::with('kategori')->find($id);
        $kategori = Kategori::all();
        return view('admin.wisata.edit', compact('wisata', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //$wisata = Wisata::find($id);
        //$wisata->update($request->all());
        //$wisata->save();

        //return redirect('/wisata')->with('success', 'Data berhasil diperbarui!');

        $wisata = Wisata::find($id);
        $ubah = Wisata::find($id);
        $awal = $ubah->gambar;

        $wisata = [
            'nama_tempat' => $request['nama_tempat'],
            'kategori_id' => $request['kategori_id'],
            'alamat' => $request['alamat'],
            'gambar' => $awal,
            'deskripsi' => $request['deskripsi'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
        ];

        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($wisata);
        return redirect('/wisata')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }



}
