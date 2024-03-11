@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.groups.students.create', $group->id) }}">
                Crear Estudiante
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Estudiantes
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
                                Edad
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr data-entry-id="{{ $student->id }}">

                                <td scope="row">
                                    {{ $student->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $student->fullName() ?? '' }} 
                                </td>
                                <td class="w-50">
                                    {{ $student->age() ?? '' }}
                                </td>
                                <td class="w-50">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.groups.students.show', [$group->id, $student->id]) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.groups.students.edit', $student->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.groups.students.destroy', $student->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar este ESTUDIANTE?');"
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
