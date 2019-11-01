@extends('admin.layouts.app')

@section('main-content')
<div class="card col-6">
        <div class="card-body">
            <div class="card-text">
                    <form action="{{route('obrassociales.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Obra Social</label>
                                <input type="text"
                                class="form-control @error('obrasocial') is-invalid @enderror"
                                name="obrasocial"
                                value="{{ old('obrasocial') }}">
                                @error('obrasocial')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                              </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
            </div>
        </div>
    </div>
@endsection
