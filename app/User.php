<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts_user_create(){
        // return $this->hasMany('Post', 'user_create_id', 'id');
        return $this->hasMany(Post::class);
    }

    public function posts_user_modified(){
        // return $this->hasMany('Post', 'user_modified_id', 'id');
        return $this->hasMany(Post::class);
    }

    public function mensajes(){
        // return $this->hasMany('Post', 'user_modified_id', 'id');
        return $this->hasMany(Mensaje::class);
    }
}