<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Wisata;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::all();
        $ulasan = Ulasan::with('wisata')->get();
        return view('admin.ulasan.index', ['table_ulasan'=> $ulasan]);
    }

    public function detailwisata()
    {
        $ulasan = Ulasan::all();
        $ulasan = Ulasan::with('wisata')->get();
        return view('detailwisata', ['table_ulasan'=> $ulasan]);
    }


    public function create(){

        //
        
    }


    public function store(Request $request){

        $this->validate($request,[
            'nama_pengulas' => 'required',
            'email_pengulas' => 'required',
            'rating' => 'required',
            'ulasan' => 'required',
        ]);

        Ulasan::create([
            'nama_pengulas' => $request->nama_pengulas,
            'email_pengulas' => $request->email_pengulas,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
        ]);
        return redirect('/#detailwisata')->with('success', 'Ulasan Anda berhasil dikirim!');
        //dd($request->all());
    }


    public function show(Ulasan $ulasan){

        //

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