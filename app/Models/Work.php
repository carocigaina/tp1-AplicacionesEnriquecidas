<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'user_id',
        'work_name',
        'lugar',
        'tareas',
        'start_date',
        'finish_date',

        
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
