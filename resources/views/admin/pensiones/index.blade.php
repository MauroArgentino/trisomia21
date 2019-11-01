@extends('admin.layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Lista de Pensiones</h2>

                    <a href="{{route('pensiones.create')}}"class="btn btn-success">Nueva Pension</a>
                    <form action="{{route('buscar')}}" method="POST">
                        @csrf
                        <input type="text" name="buscar">
                        <button type="submit">Buscar</button>
                    </form>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pension</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pensiones as $pension)

                              <tr>
                                  <td>{{$pension->id}}</td>
                                  <td>{{$pension->pension}}</td>
                                  <td>
                                        <div class="button-group">
                                                <a href="{{route('pensiones.edit',$pension->id)}}" class="btn btn-primary btn-sm">EDITAR</a>
                                                <form action="{{route('pensiones.destroy',$pension->id)}}" method="POST">
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
