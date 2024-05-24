<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailWisata;

class DetailWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detailwisata($id)
    {
        $wisata = DetailWisata::find($id);
        return view('detailwisata', compact('wisata'));
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
    public function show(string $id){
        $wisata = Wisata::find($id);
        $ulasan = Ulasan::where('wisata_id', $id)->get();
        return view('/detailwisata/{id}', ['wisata' => $wisata, 'ulasan' => $ulasan]);
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
    public function destroy(string $id)
    {
        //
    }
}
