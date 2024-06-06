<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Ulasan;
use App\Models\DetailWisata;
use Illuminate\Support\Facades\DB;

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
        $this->validate($request,[
            'nama_tempat' => 'required',
            'kategori_id' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
            'sumber' => 'required',
            'deskripsi' => 'sometimes',
            'waktu_operasional' => 'sometimes',
            'link_pendukung' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();

            $wisata = new Wisata;
            $wisata->nama_tempat = $request->nama_tempat;
            $wisata->kategori_id = $request->kategori_id;
            $wisata->alamat = $request->alamat;
            $wisata->gambar = $namaFile;
            $wisata->sumber = $request->sumber;
            $wisata->deskripsi = $request->deskripsi;
            $wisata->waktu_operasional = $request->waktu_operasional;
            $wisata->link_pendukung = $request->link_pendukung;
            $wisata->latitude = $request->latitude;
            $wisata->longitude = $request->longitude;

            $nm->move(public_path().'/img', $namaFile);
            $wisata->save();

            return redirect('/wisata')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id) {
        // Ambil data wisata beserta relasi kategori
        $wisata = Wisata::with('kategori')->find($id);
    
        // Jika data wisata tidak ditemukan, kembalikan halaman 404 atau tampilkan pesan error
        if (!$wisata) {
            // Anda bisa mengarahkan ke halaman 404 atau menampilkan pesan error khusus
            return abort(404, 'Wisata tidak ditemukan');
        }
    
        // Ambil semua ulasan terkait wisata
        $ulasan = Ulasan::where('wisata_id', $id)->get();
    
        // Kembalikan view dengan data yang telah diambil
        return view('detailwisata', compact('id', 'wisata', 'ulasan'));
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
    $wisata = Wisata::find($id);
    $awal = $wisata->gambar;

    if ($request->hasFile('gambar')) {
        // Delete the old file
        if (file_exists(public_path().'/img/'.$awal)) {
            unlink(public_path().'/img/'.$awal);
        }

        // Upload the new file
        $file = $request->file('gambar');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/img', $filename);

        // Update the wisata model with the new file name
        $wisata->gambar = $filename;
    }

        $wisata->nama_tempat = $request['nama_tempat'];
        $wisata->kategori_id = $request['kategori_id'];
        $wisata->alamat = $request['alamat'];
        $wisata->sumber = $request['sumber'];
        $wisata->deskripsi = $request['deskripsi'];
        $wisata->waktu_operasional = $request['waktu_operasional'];
        $wisata->link_pendukung = $request['link_pendukung'];
        $wisata->latitude = $request['latitude'];
        $wisata->longitude = $request['longitude'];

        $wisata->save();

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

    //foreach kategori welcome
    public function welcome(Request $request)
    {

        // return response()->json($table_kategori);
            // return view('welcome', [
            //     'kategori'=> Kategori::all()

            // ]);
            $results=$this->Wisata->kategoriAll();
            return view('welcome',['kategori'=>$results]);

            $wisata = Wisata::orderByRaw("RAND()")->first();

    }
    // foreach search petawisata
    public function petawisata()
    {
            return view('petawisata', [
                    'wisata'=> Wisata::all()
                ]);
    }
    //search welcome
    public function search(Request $request)
{
    $keyword = $request->input('keyword');

    $wisata = Wisata::where(function($query) use ($keyword) {
        $query->where('nama_tempat', 'like', '%' . $keyword . '%')
            ->orWhere('alamat', 'like', '%' . $keyword . '%');
    });
    $kategori = $request->input('kategori');
    if ($kategori) {
        $wisata->where('kategori_id', $kategori);
    }
    $result = $wisata->get();
    return response()->json($result);
}

public function getRandomWisata()
{
    $wisata = Wisata::inRandomOrder()->limit(4)->get();
    return $wisata;
}

}