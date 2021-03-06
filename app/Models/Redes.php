<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
    use HasFactory;
    //protected $table="redes";
    //protected $primaryKey="id";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'user_id',
        'url',
        

        
        
    ];

    public function user()
    {
        return$this->belongTo(User::class);
    }
}
