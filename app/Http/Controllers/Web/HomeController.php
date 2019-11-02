<?php

namespace App\Http\Controllers\Web;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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

    public function fetch(Request $request){

        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('posts')->where('titulo', 'LIKE', '%'.$query.'%')->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:absolute; background: white;">';
            foreach ($data as $row) {
                $output .= '<li><a href="'.url('home/post/').'/'.$row->slug.'">'.$row->titulo.'</a></li>';
            }
            $output .= '</ul>';

            echo $output;
        }

    }

}
