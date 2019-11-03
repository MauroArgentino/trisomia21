<?php

namespace App;

use App\User;
use Illuminate\Support\Str;
use Conner\Tagging\Taggable;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Taggable;
    
    protected $fillable = [
        'titulo',
        'contenido',
        'extracto',
        'user_create_id',
        'user_modified_id',
        'ruta_imagen',
        'slug',
        'estado']; 

    public function slug(){
         return $this->slug = Str::slug($this->titulo); 
    }

    public function user_create(){
        return $this->belongsTo(User::class, 'user_create_id', 'id');
    }

    public function user_modified(){
        return $this->belongsTo(User::class, 'user_modified_id', 'id');
    }

    public static function setImagen($imagen, $actual = false) {
        if ($imagen){
            if ($actual) {
                Storage::disk('public')->delete("images/posts/$actual");
            }

            $nombreImagen = Str::random(20).'.jpg';
            $imagenManipulada = Image::make($imagen)->encode('jpg', 75);
            $imagenManipulada->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put("images/posts/$nombreImagen", $imagenManipulada->stream());

            return $nombreImagen;
        } else {
                return false;
        }
    }

     public static function getImagen() {
        
       
    }

    public static function getExcerpt($str, $startPos = 0, $maxLength = 50) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength - 6);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= ' [...]';
        } else {
            $excerpt = $str;
        }

        return $excerpt;
    }

}