<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Mensaje;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;
use Toastr;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $publicaciones = Post::orderBy('id', 'DESC')->paginate(100);
        
        return view('admin.post.index', compact('publicaciones'));

    }

    public function create(){

        return view('admin.post.create');

    }

    public function store(Request $request) {

        $etiquetas = explode(',', $request->tags);

        $publicacion = new Post;

        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->user_create_id = Auth::user()->id;
        $publicacion->slug = Str::slug($request->titulo);
        $publicacion->extracto = $request->extracto;
        if ($request->estado == "on"){
            $publicacion->estado = "PUBLISHED";
        }else{
            $publicacion->estado = "DRAFT";
        }
        $publicacion->ruta_imagen = Post::setImagen($request->ruta_imagen);
        $publicacion->save();
        
        $publicacion->tag($etiquetas);

        $publicacion->save();

        $notificacion = [
            'titulo' => 'Felicitaciones',
            'mensaje' => 'La publicación se ha creado satisfactoriamente.',
            'tipo' => 'success',
        ];

        return redirect('admin/home/post/listado')->with('notificacion', $notificacion);
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $etiquetas = explode(',', $request->tags);

        $publicacion = Post::find($id);

        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->user_modificated_id = Auth::user()->id;
        $publicacion->slug = Str::slug($request->titulo);
        $publicacion->extracto = $request->extracto;
        if ($request->estado == "on"){
            $publicacion->estado = "PUBLISHED";
        }else{
            $publicacion->estado = "DRAFT";
        }
        $publicacion->ruta_imagen = Post::setImagen($request->ruta_imagen);
        $publicacion->save();
        
        $publicacion->tag($etiquetas);

        $publicacion->save();

        return redirect('admin/home/post/listado')->with('status', 'La publicación se ha editado satisfactoriamente.');
    }

    public function destroy($id) {
        $publicacion = Post::findOrFail($id);

        if (Storage::disk('public')->exists("images/posts/$publicacion->ruta_imagen")){
            Storage::disk('public')->delete("images/posts/$publicacion->ruta_imagen");
        }

        $publicacion->delete();

        return redirect('admin/home')->with('status', 'La publicación ha sido eliminada con éxito.');
    }

}
