@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.permissions.create') }}">
                Crear Permiso
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Permisos
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
                                Descripción
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $key => $permission)
                            <tr data-entry-id="{{ $permission->id }}">

                                <td scope="row">
                                    {{ $permission->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $permission->name ?? '' }}
                                </td>
                                <td class="w-50">
                                    {{ $permission->description ?? '' }}
                                </td>
                                <td class="w-50">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.permissions.show', $permission->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.permissions.edit', $permission->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar este PERMISO?');"
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
