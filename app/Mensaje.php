<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin\User;

class Mensaje extends Model
{
    protected $fillable = ['apellido_y_nombres', 'email', 'asunto', 'mensaje'];

    public function user() {
    	$this->belongsTo(User::class);
    }
}
