@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-secondary" href="{{ route('admin.posts.index') }}">
            Atrás
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Crear Publicación
    </div>

    <div class="card-body">
        <form action="{{ route("admin.posts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Titulo</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($posts) ? $posts->title : '') }}" required>
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">Contenido</label>
                <input type="text" id="content" name="content" class="form-control" value="{{ old('content', isset($posts) ? $posts->content : '') }}" required>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
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