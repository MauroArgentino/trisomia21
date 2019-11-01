<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $fillable = ['pension'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }
}
