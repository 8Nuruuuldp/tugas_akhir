<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        });

    }



    protected $guarded =['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
