<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Agenda extends Model
{
	protected $fillable = ['titulo', 'contenido', 'fechaInicio',
							'fechaFin', 'ubicacion', 'enteOrganizador',
							'user_create_id', 'imagenUrl', 'horario'];

    public function user() {
    	$this->belongsTo(User::class);
    }
}
