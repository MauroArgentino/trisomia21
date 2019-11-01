<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schooling extends Model
{
    protected $fillable = ['institucionEducativa'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }
}
