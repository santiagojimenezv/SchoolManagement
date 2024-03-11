@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.users.create') }}">
                Crear Usuario
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Usuarios
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
                                Nombre
                            </th>
                            <th scope="col" class="col-md-2">
                                Cargo
                            </th>
                            <th scope="col" class="col-md-2">
                                Materia
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr data-entry-id="{{ $user->id }}">

                                <td scope="row">
                                    {{ $user->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $user->fullName() ?? '' }} 
                                </td>
                                <td class="w-25">
                                    {{ $user->position ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $user->subject ?? '-' }}
                                </td>
                                <td class="w-25">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.users.show', $user->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.users.edit', $user->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar este USUARIO?');"
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
