<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['tratamiento'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }
}
