@extends('admin.layouts.app')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Lista de Obras Sociales</h2>
                    <a href="{{route('obrassociales.create')}}"class="btn btn-success">Nueva Obra Social</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Obra Social</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($obrassociales as $obrasocial)

                              <tr>
                                  <td>{{$obrasocial->id}}</td>
                                  <td>{{$obrasocial->obrasocial}}</td>
                                  <td>
                                        <div class="button-group">
                                                <a href="{{route('obrassociales.edit',$obrasocial->id)}}" class="btn btn-primary btn-sm">EDITAR</a>
                                                <form action="{{route('obrassociales.destroy',$obrasocial->id)}}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">ELIMINAR</button>
                                                </form>
                                        </div>
                                  </td>
                              </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
