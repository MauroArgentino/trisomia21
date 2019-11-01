@extends('admin.layouts.app')

@section('main-content')
<div class="card col-6">
    <div class="card-body">
        <div class="card-text">
        <form action="{{route('pensiones.update',$pension->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">PENSION</label>
                    <input type="text"
                           class="form-control @error('pension') is-invalid @enderror"
                           name="pension"
                           value="{{$pension->pension}}">
                           @error('pension')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>

                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
