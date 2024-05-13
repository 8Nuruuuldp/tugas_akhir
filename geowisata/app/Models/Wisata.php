<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "table_wisata";
    protected $guarded =['id'];
    protected $with = ['kategori'];
    protected $fillable = ['nama_tempat', 'kategori_id', 'alamat', 'gambar', 'deskripsi', 'latitude', 'longitude'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function ulasan(){
        return $this->hasMany(Ulasan::class);
    }

    public function kategoriAll()
    {
        $results = DB::table('table_kategori')
        ->select('id', 'nama_kategori')
        ->get();
        return $results;
    }
}
