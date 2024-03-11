@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ver Grupo
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
                            {{ $group->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Director de Grupo
                        </th>
                        <td>
                            {{ $group->profesor->fullName() }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {!! $group->name !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-secondary" href="{{ route('admin.groups.index') }}">
                Atrás
            </a>
        </div>


    </div>
</div>
@endsection