<div class="table-responsive">
<table class="table table-bordered table-striped" id="" style="">
                    <thead>
                        <tr>
                            <th valign="middle" width="5%">ID</th>
                            <th  width="35%">Título</th>
                           {{--  <th>Contenido</th> --}}
                            <th width="6%">Publicado?</th>
                            <th width="14%">Última actualización</th>
                            <th width="12%">Acciones</th>
                        </tr>
                        {{ csrf_field() }}
                    </thead>
                    <tbody>
                        @foreach($publicaciones as $publicacion)
                            <tr class="item{{$publicacion->id}} @if($publicacion->estado) warning @endif" data-id="{{$publicacion->id}}">
                                <td>{{$publicacion->id}}</td>
                                <td>
                                    <a href="{{ route('web.publicacion.show', $publicacion->slug) }}" target="_blank">
                                    {{$publicacion->titulo}}</a>
                                </td>
                                {{-- <td>
                                    {!! App\Post::getExcerpt($publicacion->contenido) !!}
                                </td> --}}
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
                                    <form action="{{ route('admin.post.destroy', ':POST_ID')}}" method="POST" id="form-delete">
                                        <a class="btn btn-success" href="" data-toggle="tooltip" title="Ver">
                                        <span class="fa fa-eye"></span></a>
                                        <a class="btn btn-info" href="{{ route('admin.post.edit', $publicacion->id) }}" data-toggle="tooltip" title="Modificar">
                                        <span class="fa fa-edit"></span></a>
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger submitEliminar deletebtn" data-post="{{ $publicacion->id }}" data-toggle="tooltip" title="Eliminar">
                                    <span class="fa fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>