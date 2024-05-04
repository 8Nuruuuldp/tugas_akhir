<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "table_wisata";
    protected $primaryKey = "id";
    protected $fillable = ['nama_tempat', 'kategori_id', 'alamat', 'gambar', 'deskripsi', 'latitude', 'longitude'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }


    // public function allData(){
    //     $results = DB::table('table_wisata')
    //     ->select('nama_tempat', 'kategori_id', 'alamat', 'gambar', 'deskripsi', 'latitude', 'longitude')
    //     ->get();
    //     return $results;
    // }

    // public function allKategori(){
    //     $results = DB::table('table_kategori')
    //     ->select('id', 'nama_kategori')
    //     ->get();
    //     return $results;
    // }
}
