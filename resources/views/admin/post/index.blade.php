@extends('admin.layouts.app')

@section('main-content')
<div class="content">
      
        <div class="card-header">

<div class="title">
<h1>
Listado de Publicaciones</h1></div>{{-- <div class="float-right">{{ $publicaciones->links() }}</div> --}}
<hr>
<div class="row">
 <div class="form-group col-md-4">
<div class="input-group">

    <span class="input-group-prepend"><div class="input-group-text bg-white border-right-0"><i class="fa fa-search text-secondary"></i>
    </div></span>
  <input class="form-control border-left-0"
         placeholder="">
  <div class="input-group-append" ><button class="input-group-prepend btn btn-outline-secondary border-left-0 border" type="button">
     Buscar
    </button></div>
</div>
</div>
<div class="col-md-8">
    <div class="float-right">
     {!! $publicaciones->links() !!}
     </div>
     </div>
 </div>
                <table class="table table-bordered table-striped" id="" style="">
                    <thead>
                        <tr>
                            <th valign="middle">ID</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th>Publicado?</th>
                            <th>Última actualización</th>
                            <th>Acciones</th>
                        </tr>
                        {{ csrf_field() }}
                    </thead>
                    <tbody>
                        @foreach($publicaciones as $publicacion)
                            <tr class="item{{$publicacion->id}} @if($publicacion->estado) warning @endif">
                                <td>{{$publicacion->id}}</td>
                                <td>{{$publicacion->titulo}}</td>
                                <td>
                                    {!! App\Post::getExcerpt($publicacion->contenido) !!}
                                </td>
                                <td class="text-center">
                                    <div class="icheck-concrete">
                                    <input type="checkbox" class="published" id="check{{$publicacion->id}}" data-id="{{$publicacion->id}}" @if ($publicacion->estado == 'PUBLISHED') checked @endif>
                                    <label for="check{{$publicacion->id}}"></label>
                                    </div>
                                </td>
                                <td data-toggle="tooltip" title="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publicacion->updated_at)->format('d-m-Y H:i:s')}}">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $publicacion->updated_at)->diffForHumans() }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.post.destroy', $publicacion->id)}}" method="POST">
                                        <a class="btn btn-success" href="" data-toggle="tooltip" title="Ver">
                                        <span class="fa fa-eye"></span></a>
                                        <a class="edit-modal btn btn-info" href="{{ route('admin.post.edit', $publicacion->id) }}" data-toggle="tooltip" title="Modificar">
                                        <span class="fa fa-edit"></span></a>
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Eliminar">
                                    <span class="fa fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    <div class="float-right">
                       {!! $publicaciones->links() !!}
                   </div>
               </div>
    
</div>
@endsection
