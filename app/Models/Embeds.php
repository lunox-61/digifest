<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embeds extends Model
{
    use HasFactory;
    protected $table = 'embed_video';
    protected $fillable = [
        'title',
        'description',
        'embed_links'
    ];
}
