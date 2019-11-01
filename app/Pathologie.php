<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    protected $fillable = ['patologia'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }
}
