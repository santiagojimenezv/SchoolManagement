@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ver Actividad
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
                            {{ $schedule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Actividad
                        </th>
                        <td>
                            {{ $schedule->activity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Día
                        </th>
                        <td>
                            {!! $schedule->date->format("d M Y") !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hora
                        </th>
                        <td>
                            {!! $schedule->time !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Responsable
                        </th>
                        <td>
                            {!! $schedule->responsible !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-secondary" href="{{ route('admin.schedule.index') }}">
                Atrás
            </a>
        </div>


    </div>
</div>
@endsection