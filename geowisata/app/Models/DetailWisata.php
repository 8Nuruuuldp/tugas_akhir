<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailWisata extends Model
{
    use HasFactory;
    protected $table = 'table_wisata';
    protected $fillable = ['nama_tempat', 'alamat', 'gambar', 'deskripsi', 'latitude', 'longitude'];
}
