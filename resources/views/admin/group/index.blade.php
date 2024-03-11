    @extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.groups.create') }}">
                Crear Grupo
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Grupos
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
                                Director de Grupo
                            </th>
                            <th scope="col" class="col-md-2">
                                Grado
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($groups as $key => $group)
                            <tr data-entry-id="{{ $group->id }}">

                                <td scope="row">
                                    {{ $group->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $group->profesor->fullName() ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $group->name ?? '' }}
                                </td>
                                <td class="w-50">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.groups.show', $group->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.groups.edit', $group->id) }}">
                                        Editar
                                    </a>
                                    <a class="btn btn-xs btn-success" href="{{ route('admin.groups.students.index', $group->id) }}">
                                        Ver Estudiantes
                                    </a>
                                    <form action="{{ route('admin.groups.destroy', $group->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar este GRUPO?');"
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
