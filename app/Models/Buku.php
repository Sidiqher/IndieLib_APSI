<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with = ['category', 'penulis'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('title', 'like', '%'. $search . '%');
        });
        
        $query->when($filters['category'] ??  false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        
        $query->when($filters['penulis'] ??  false, function($query, $penulis){
            return $query->whereHas('penulis', function($query) use ($penulis){
                $query->where('username', $penulis);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function penulis()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function katalog()
    {
        return $this->hasMany(Katalog::class, 'buku_id');
    }
}
