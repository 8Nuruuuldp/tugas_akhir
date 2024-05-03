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

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        });

    }

    // public function search(){
    //     $data = array (
    //         'tps' => $this->table_wisata->get_all_data()
    //     )

    //     $this->load->view()
    // }


}
