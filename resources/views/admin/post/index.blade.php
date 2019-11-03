@extends('admin.layouts.app')

@section('main-content')
<div class="content">
      
    <div class="card card-default">
        <div class="card-header">

<div class="card-title">Listado de Publicaciones</div>{{-- <div class="float-right">{{ $publicaciones->links() }}</div> --}}
 </div>
        <div class="card-body">
                <table class="table table-bordered table-striped" id="example1" style="">
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
                        @foreach($publicaciones as $post)
                            <tr class="item{{$post->id}} @if($post->estado) warning @endif">
                                <td>{{$post->id}}</td>
                                <td>{{$post->titulo}}</td>
                                <td>
                                    {!! App\Post::getExcerpt($post->contenido) !!}
                                </td>
                                <td class="text-center"><input type="checkbox" class="published" data-id="{{$post->id}}" @if ($post->estado == 'PUBLISHED') checked @endif></td>
                                <td data-toggle="tooltip" title="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('d-m-Y H:i:s')}}">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->diffForHumans() }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.post.destroy', $post->id)}}" method="POST">
                                        <a class="btn btn-success" href="" data-toggle="tooltip" title="Ver">
                                        <span class="fa fa-eye"></span></a>
                                        <a class="edit-modal btn btn-info" href="" data-toggle="tooltip" title="Modificar">
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
        </div><!-- /.panel-body -->
        <div class="card-footer">
        {{-- <div class="float-right">{{ $publicaciones->links() }}</div> --}}
        </div>
    </div><!-- /.panel panel-default -->
    
</div>
@endsection
