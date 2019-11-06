<?php

namespace App\Http\Controllers\Web;

use App\Post;
use App\Agenda;
use App\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MensajeStoreRequest;
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

        return view('web.publicacion.show', compact('publicacion'));

    }

    public function fetch(Request $request){

        if($request->get('consulta'))
        {
            $consulta = $request->get('consulta');

            $resultados = DB::table('posts')->where('titulo', 'LIKE', '%'.$consulta.'%')->get();
 
            $desplegable = '<ul class="dropdown-menu" style="display:block; position:absolute; background: white;">';

            foreach ($resultados as $registro) {
                $desplegable .= '<li><a href="'.url('home/publicacion/').'/'.$registro->slug.'">'.$registro->titulo.'</a></li>';
            }
            
            $desplegable .= '</ul>';

            echo $desplegable;
        }

    }

    public function actividades(){

        $actividades = Agenda::orderBy('updated_at', 'DESC')->get();

        return view('web.actividades.index', compact('actividades'));

    }

    public function miembros(){

        return view('web.informacion.miembros');

    }

    public function quienesSomos(){

        return view('web.informacion.history');

    }

    public function donar(){

        return view('web.formulario.index');

    }

    public function voluntario(){

        return view('web.formulario.index');

    }

    public function registrarse(){

        return view('web.formulario.index');

    }

    public function sindrome(){

        return view('web.sindrome.index');

    }

    public function publicaciones(){

        return view('web.publicacion.index');

    }

    public function contacto(){

        return view('web.contacto.index');

    }

    public function mensajeStore(MensajeStoreRequest $request){

        Mensaje::create($request->all());

        return redirect()->route('web.home.contacto')->with('success','Registro creado satisfactoriamente');

    }

}
