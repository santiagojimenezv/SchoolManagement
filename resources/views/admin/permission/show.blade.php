@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ver Permiso
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
                            {{ $permission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {{ $permission->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <td>
                            {!! $permission->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-secondary" href="{{ url()->previous() }}">
                Atrás
            </a>
        </div>


    </div>
</div>
@endsection