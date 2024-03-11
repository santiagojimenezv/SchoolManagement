@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.posts.create') }}">
                Relizar Publicación
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Publicaciones
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-striped table-hover">

                    <thead>
                        <colgroup>
                        <tr>
                            <th scope="col">
                                Id
                            </th>
                            <th scope="col">
                                Titulo
                            </th>
                            <th scope="col" class="col-md-2">
                                Contenido
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $post)
                            <tr data-entry-id="{{ $post->id }}">

                                <td scope="row">
                                    {{ $post->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $post->title ?? '' }}
                                </td>
                                <td class="w-50">
                                    {{ $post->content ?? '' }}
                                </td>
                                <td class="w-50">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.posts.show', $post->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar esta PUBLICACIÓN?');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
