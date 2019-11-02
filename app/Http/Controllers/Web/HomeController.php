<?php

namespace App\Http\Controllers\Web;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index(){

    	$meses = [ 1 => 'Ene',
    					   2 => 'Feb',
    					   3 => 'Mar',
    					   4 => 'Abr',
    					   5 => 'May',
    					   6 => 'Jun',
    					   7 => 'Jul',
    					   8 => 'Ago',
    					   9 => 'Sep',
    					   10 => 'Oct',
    					   11 => 'Nov',
    					   12 => 'Dic',
    	];

    	$publicaciones = Post::orderBy('id', 'DESC')->where('estado', 'PUBLISHED')->simplePaginate(4);
       
        return view('web.index', compact('publicaciones', 'meses'));

    }

     public function show($slug){

        $publicacion = Post::where('slug', $slug)->first();

        return view('web.post.single', compact('publicacion'));

    }

}
