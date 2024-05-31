<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $table = 'peminjamans';

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'katalog_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nim-nip', 'nim-nip');
    }
}
