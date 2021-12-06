<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatido extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'user_id',
        'titulo',
        'descripcion',

        
        
    ];
    public function user()
    {
        return $this->belongsTo(whatido::class);
    }
}
