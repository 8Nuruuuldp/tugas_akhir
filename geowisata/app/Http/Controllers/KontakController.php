<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('kontak.index', ['table_kontak'=> $kontak]);
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
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect('/#kontak')->with('success', 'Pesan berhasil dikirim!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kontak = Kontak::find($id);
        //$user = User::find($id);
        $kontak->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
    }
}
