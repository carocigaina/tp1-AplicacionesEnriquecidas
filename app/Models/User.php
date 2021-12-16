<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'mensaje',
        'saludo',
        'image',
        'address',
        'title_job',
        'email',
        'password',
        'tel',
        'about',
        'about_title',
        'about_image',
        'about_button',
        'what_title',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function skill(){
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');

    }
    public function skillsProfessional(){
        return $this->hasMany(skillsProfessional::class, 'user_id', 'id');
    }

    public function works()
    {
        return $this->hasMany(Works::class, 'user_id', 'id');

    }
    public function featuredProjects()
    {
        return $this->hasMany(featuredProjects::class, 'user_id', 'id');

    }
    public function post()
    {
        return $this->hasMany(post::class, 'user_id', 'id');

    }
    public function whatido()
    {
        return $this->hasMany(Whatido::class, 'user_id', 'id');

    }
    public function redes()
    {
        return $this->hasMany(Redes::class, 'user_id', 'id');

    }
    public function about()
    {
        return $this->hasMany(About::class, 'user_id', 'id');

    }
    public function getGetImageAttribute($key){
        if($this->image){
            return url("storage/$this->image");
        }
    }
    public function getGetFotoAttribute($key){
        if($this->about_image){
            return url("storage/$this->about_image");
        }
    }
    public function getUppercaseAttribute($key){
        
            return strtoupper($this->name);
    }    
}
