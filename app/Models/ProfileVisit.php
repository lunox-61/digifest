<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileVisit extends Model
{
    use HasFactory;
    // User.php
    public function profileVisits()
    {
        return $this->hasMany(ProfileVisit::class);
    }
}
