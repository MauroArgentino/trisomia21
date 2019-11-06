<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Mensaje extends Model
{
    protected $fillable = ['apellido_y_nombres', 'email', 'asunto', 'mensaje'];

    public function user() {
    	$this->belongsTo(User::class);
    }

    protected static function boot() {
        parent::boot();

        static::creating(function ($question) {
            $question->ubicacion = 'INBOX';
        });
    }
}
