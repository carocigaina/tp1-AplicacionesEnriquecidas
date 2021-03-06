<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'user_id',
        'school_name',
        'degree',
        'description',
        'start_date',
        'finish_date',

        
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
