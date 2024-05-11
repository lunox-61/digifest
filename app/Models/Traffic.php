<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    use HasFactory;

    protected $table = 'traffics'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'user_id',
        'day',
        'page_views',
        'page_url', // Kolom untuk URL halaman
    ];

    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom kunci utama jika berbeda
}
