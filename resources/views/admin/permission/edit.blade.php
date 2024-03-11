@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-secondary" href="{{ route('admin.permissions.index') }}">
            Atrás
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Editar Permiso
    </div>

    <div class="card-body">
        <form action="{{ route("admin.permissions.update", [$permission->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($permission) ? $permission->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($permission) ? $permission->description : '') }}" required>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
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