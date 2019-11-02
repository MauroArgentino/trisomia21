<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['donador', 'telefono', 'cui'];

    public function donations()
    {
        return $this->hasMany('App\Donation');
    }
}
