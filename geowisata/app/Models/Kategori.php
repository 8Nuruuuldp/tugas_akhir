<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "table_kategori";
    protected $primaryKey = "id";
    protected $fillable = ['nama_kategori'];

    public function wisata(){
        return $this->hasMany(Wisata::class);
    }
}
