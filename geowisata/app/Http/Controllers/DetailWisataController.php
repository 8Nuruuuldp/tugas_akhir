<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailWisata;
use App\Models\Wisata;
use App\Models\Ulasan;

class DetailWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detailwisata($id)
    {
        
        $wisata = Wisata::find($id);
        return view('detailwisata', compact('wisata'));
        
        //$wisata = DetailWisata::findorFail($id);
        //return view('detailwisata', compact('wisata'));
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

        $wisata = Wisata::find($id)->table_wisata;

        DetailWisata::where('id', $id)->firstOrFail();
        $ulasan = Ulasan::where('wisata_id', $id)->get();

        return view('detailwisata', compact('wisata', 'ulasan'));

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
