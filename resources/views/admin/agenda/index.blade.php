@extends('admin.layouts.app')

@section('main-content')
    <div class="card card-default">
       <div class="card-header">
           <div class="title">Listado de eventos</div>
       </div>

        <div class="card-body">
                <table class="table" id="eventoTable" style="">
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
                        @foreach($eventos as $evento)
                            <tr class="item{{$evento->id}} @if($evento->estado) warning @endif">
                                <td>{{$evento->id}}</td>
                                <td>{{$evento->titulo}}</td>
                                <td>
                                    {!! App\evento::getExcerpt($evento->contenido) !!}
                                </td>
                                <td class="text-center"><input type="checkbox" class="published" data-id="{{$evento->id}}" @if ($evento->estado == 'PUBLISHED') checked @endif></td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $evento->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-success" href="" data-id="{{$evento->id}}" data-title="{{$evento->titulo}}" data-content="{{$evento->contenido}}">
                                    <span class="fa fa-eye"></span></a>
                                    <a class="edit-modal btn btn-info" href="" data-id="{{$evento->id}}" data-title="{{$evento->titulo}}" data-content="{{$evento->contenido}}">
                                    <span class="fa fa-edit"></span> Editar</a>
                                    <a class="delete-modal btn btn-danger" href="" data-id="{{$evento->id}}" data-title="{{$evento->titulo}}" data-content="{{$evento->contenido}}">
                                    <span class="fa fa-trash"></span> Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div><!-- /.panel-body -->
    </div><!-- /.panel panel-default -->
</div>

@endsection