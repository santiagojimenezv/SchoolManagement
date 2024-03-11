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
                            {{ $setting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Llave
                        </th>
                        <td>
                            {{ $setting->key }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Valor
                        </th>
                        <td>
                            {!! $setting->value !!}
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