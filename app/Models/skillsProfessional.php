<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skillsProfessional extends Model
{
    use HasFactory;
    public function user()
    {
        return$this->belongTo(User::class);
    }
}
