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
        $result=$this->Wisata->allData();
        return json_encode($result);
    }

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
    $categories = Kategori::all(); // Mengambil semua data kategori
    return view('admin.wisata.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|exists:wisata,kategori',
            'nama_tempat' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image',
            'latitude' => 'required',
            'longitude' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
        dd($request->all());
        $result = Kategori::create($validatedData);
if ($result) {
    // Berhasil disimpan
    return redirect('/wisata');
} else {
    // Gagal menyimpan, lakukan penanganan kesalahan
    return back()->withInput()->withErrors(['message' => 'Gagal menyimpan data.']);
}
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
        return view('admin.wisata.edit',['wisata' => $wisata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatewisata(Request $request, $id)
    {
        $this->validate($request, [
            'kategori'  => 'required',
            'nama_tempat'  => 'required',
            'alamat'    => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required',
            'latitude'  => 'required',
            'longitude' => 'required'
        ]);

        $wisata = Wisata::find($id);
        $wisata->kategori = $request->kategori;
        $wisata->nama_tempat = $request->nama_tempat;
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
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();

        return redirect()->back()->with(['message'=> 'Sukses', 'Data Berhasil Di hapus']);
    }


}
