<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "table_wisata";
    protected $fillable = ['kategori', 'nama_tempat', 'alamat', 'deskripsi', 'gambar', 'latitude', 'longitude'];

    public function allData(){
        $result = DB::table('table_wisata')
            ->select('latitude','longitude')
            ->get();
        return $result;
    }
}
