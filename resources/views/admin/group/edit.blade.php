@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-secondary" href="{{ route('admin.groups.index') }}">
            Atrás
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Crear Grupo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.groups.store", [$group->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('profesor') ? 'has-error' : '' }}">
                <label for="profesor">Director de Grupo</label>
                <input type="text" id="profesor" name="profesor" class="form-control" value="{{ old('profesor', isset($group) ? $group->profesor->fullname() : '') }}" required>
                @if($errors->has('profesor'))
                    <p class="help-block">
                        {{ $errors->first('profesor') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('professor', isset($group) ? $group->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
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