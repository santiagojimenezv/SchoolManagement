@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ver Configuración
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $post->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Titulo
                        </th>
                        <td>
                            {{ $post->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Contenido
                        </th>
                        <td>
                            {!! $post->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Autor
                        </th>
                        <td>
                            {!! $post->autor->fullName() !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-secondary" href="{{ route('admin.posts.index') }}">
                Atrás
            </a>
        </div>


    </div>
</div>
@endsection