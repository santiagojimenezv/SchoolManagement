@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ver Usuario
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
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {{ $user->fullName() }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {!! $user->email !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Documento
                        </th>
                        <td>
                            {{ $user->document_type }}  {{ $user->document_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estatus
                        </th>
                        <td>
                            {{ $user->status ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Materia
                        </th>
                        <td>
                            {{ $user->subject ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Posición
                        </th>
                        <td>
                            {{ $user->position ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Rol
                        </th>
                        <td>
                            {{ $user->role->name ?? '' }}
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