<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table = 'table_ulasan';
    protected $primaryKey = "id";
    protected $fillable = ['wisata_id', 'rating', 'ulasan', 'nama_pengulas', 'email_pengulas'];

    public function user(){
        return $this->belongsTo(Wisata::class);
    }

    public static $rules = [
        'wisata_id' => 'required|exist:table_wisata, id',
        'rating' => 'required|integer|min:1|max:5',
        'ulasan' => 'required|string|max:255',
        'nama_pengulas' => 'required|string|max:255',
        'email_pengulas' => 'required|email|max:255'
    ];

    public function getUlasanAttribute($value){
        return ucfirst($value);
    }

    public function setUlasanAttribute($value){
        $this->attributes['ulasan'] = strtolower($value);
    }
}
