@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.settings.create') }}">
                Crear Configuración de la Aplicación
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Lista de Configuraciones
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
                                Llave
                            </th>
                            <th scope="col" class="col-md-2">
                                Valor
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                        </colgroup>
                    </thead>
                    <tbody>
                        @foreach ($settings as $key => $setting)
                            <tr data-entry-id="{{ $setting->id }}">

                                <td scope="row">
                                    {{ $setting->id ?? '' }}
                                </td>
                                <td class="w-25">
                                    {{ $setting->key ?? '' }}
                                </td>
                                <td class="w-50">
                                    {{ $setting->value ?? '' }}
                                </td>
                                <td class="w-50">
                                    <a class="btn btn-xs btn-primary"
                                        href="{{ route('admin.settings.show', $setting->id) }}">
                                        Ver
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.settings.edit', $setting->id) }}">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.settings.destroy', $setting->id) }}" method="POST"
                                        onsubmit="return confirm('Esta seguro que desea eliminar esta CONFIGURACIÓN?');"
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
