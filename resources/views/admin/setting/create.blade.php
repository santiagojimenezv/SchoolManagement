@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-secondary" href="{{ route('admin.settings.index') }}">
            Atrás
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Crear Configuración
    </div>

    <div class="card-body">
        <form action="{{ route("admin.settings.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('key') ? 'has-error' : '' }}">
                <label for="key">Clave</label>
                <input type="text" id="key" name="key" class="form-control" value="{{ old('key', isset($setting) ? $setting->key : '') }}" required>
                @if($errors->has('key'))
                    <p class="help-block">
                        {{ $errors->first('key') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value">Valor</label>
                <textarea id="value" name="value" class="form-control " required>{{ old('value', isset($setting) ? $setting->value : '') }}</textarea>
                @if($errors->has('value'))
                    <p class="help-block">
                        {{ $errors->first('value') }}
                    </p>
                @endif
            </div>
            <div>
                <input class="btn btn-success mt-3" type="submit" value="Crear">
            </div>
        </form>
    </div>
</div>
@endsection