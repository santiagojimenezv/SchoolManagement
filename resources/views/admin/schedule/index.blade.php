@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.schedule.create') }}">
                Crear Actividad
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Actividades
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
                                Actividad
                            </th>
                            <th scope="col">
                                Día
                            </th>
                            <th scope="col">
                                hora
                            </th>
                            <th scope="col">
                                Lugar
                            </th>
                            <th scope="col">
                                Responsable
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($schedule as $key => $activity)
                            <tr data-entry-id="{{ $activity->id }}">

                                <td scope="row">
                                    {{ $activity->id ?? '' }}
                                </td>
                                <td class="">
                                    {{ $activity->activity ?? '' }}
                                </td>
                                <td class="">
                                    {{ $activity->date->format('d M Y') ?? '' }}
                                </td>
                                <td class="">
                                    {{ $activity->time ?? '' }}
                                </td>
                                <td class="">
                                    {{ $activity->location ?? '' }}
                                </td>
                                <td class="">
                                    {{ $activity->responsible ?? '' }}
                                </td>
                                
                                <td class="">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.schedule.show', $activity->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.schedule.edit', $activity->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.schedule.destroy', $activity->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar esta Actividad?');"
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
