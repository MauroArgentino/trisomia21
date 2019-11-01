<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Mensaje;

class HomeController extends Controller
{
    public function index(){
    	$cantidad_posts = Post::where('estado', 'PUBLISHED')->count();
    	$cantidad_borradores = Post::where('estado', 'DRAFT')->count();
    	$cantidad_usuarios = User::count();
        $cantidad_mensajes = Mensaje::where('estado', 'NO_LEIDO')->count();

        return view('admin.home', compact('cantidad_posts',
        	'cantidad_borradores',
        	'cantidad_usuarios',
            'cantidad_mensajes'
        ));
    }

    public function __construct(){
    	$this->middleware('auth');
    }
}

