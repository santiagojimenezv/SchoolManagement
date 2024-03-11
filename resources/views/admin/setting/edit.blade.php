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
        Editar Configuración
    </div>

    <div class="card-body">
        <form action="{{ route("admin.settings.update", [$setting->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                <textarea id="value" name="value" class="form-control ">{{ old('value', isset($setting) ? $setting->value : '') }}</textarea>
                @if($errors->has('value'))
                    <p class="help-block">
                        {{ $errors->first('value') }}
                    </p>
                @endif
            </div>
            <div>
                <input class="btn btn-warning mt-3" type="submit" value="Editar">
            </div>
        </form>


    </div>
</div>
@endsection