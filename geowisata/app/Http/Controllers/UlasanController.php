<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Wisata;

class UlasanController extends Controller
{
    public function index(UlasanIndexRequest $request){
    
        $ulasan = Ulasan::all();
        $ulasan = Ulasan::with('wisata')->get();
        return view('admin.ulasan.index', compact('ulasan'));

    }


    public function create(){

        //
        
    }


    public function store(UlasanStoreRequest $request){

        //

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