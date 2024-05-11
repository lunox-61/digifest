<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = ['page_name', 'visit_date', 'visit_count'];

    // Tabel yang terkait dengan model ini
    protected $table = 'visitors';

    // Attribut-atribut yang harus dikonversi ke tipe data tertentu
    protected $casts = [
        'visit_date' => 'date',
        'visit_count' => 'integer',
    ];

    // Fungsi untuk mengambil jumlah kunjungan
    public static function getCount()
    {
        return self::sum('visit_count');
    }

    // Fungsi untuk mengambil jumlah kunjungan berdasarkan halaman
    public static function getCountByPage($pageName)
    {
        return self::where('page_name', $pageName)->sum('visit_count');
    }
}