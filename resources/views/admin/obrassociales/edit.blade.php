@extends('admin.layouts.app')
@section('main-content')
<div class="card col-6">
    <div class="card-body">
        <div class="card-text">
        <form action="{{route('obrassociales.update',$obrasocial->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">OBRA SOCIAL</label>
                    <input type="text"
                           class="form-control @error('obrasocial') is-invalid @enderror"
                           name="obrasocial"
                           value="{{$obrasocial->obrasocial}}">
                           @error('obrasocial')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>

                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
