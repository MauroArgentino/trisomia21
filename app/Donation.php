<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['tipodonacion', 'descripcion', 'fechadonacion', 'donador_id'];

    public function donors()
    {
        return $this->belongsTo('App\Donor');
    }
}
