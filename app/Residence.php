<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    protected $fillable = ['situacionresidencial'];


    public function registereds()
    {
        return $this->belongsToMany('App\Registered');
    }
}
