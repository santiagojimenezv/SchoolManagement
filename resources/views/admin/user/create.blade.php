@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-secondary" href="{{ route('admin.users.index') }}">
                Atrás
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Crear Usuario
        </div>

        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-2 ">
                    <div class="form-group col-md-6">
                        <label for="first_names">Nombres</label>
                        <input type="text" class="form-control" id="first_names" name="first_names"
                            value="{{ old('first_names', isset($user) ? $user->first_names : '') }}" required>
                        @if ($errors->has('first_names'))
                            <p class="help-block">
                                {{ $errors->first('first_names') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_names">Apellidos</label>
                        <input type="text" class="form-control" id="last_names" name="last_names"
                            value="{{ old('last_names', isset($user) ? $user->last_names : '') }}" required>
                        @if ($errors->has('last_names'))
                            <p class="help-block">
                                {{ $errors->first('last_names') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                            @if ($errors->has('email'))
                                <p class="help-block">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('password'))
                            <p class="help-block">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-6">
                        <label for="document_type">Tipo de Documento</label>
                        <select class="form-select" id="document_type" name="document_type">
                            <option selected disabled>-</option>
                            <option value="C.C">C.C</option>
                            <option value="R.C">R.C</option>
                            <option value="T.I">T.I</option>
                            <option value="C.E">C.E</option>
                        </select>
                        @if ($errors->has('document_type'))
                            <p class="help-block">
                                {{ $errors->first('document_type') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="document_number">Número de Documento</label>
                        <input type="text" class="form-control" id="document_number" name="document_number"
                            value="{{ old('document_number', isset($user) ? $user->document_number : '') }}" required>
                        @if ($errors->has('document_number'))
                            <p class="help-block">
                                {{ $errors->first('document_number') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-md-3">
                        <label for="status">Estado</label>
                        <select class="form-select" id="status" name="status">
                            <option selected disabled>-</option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                        @if ($errors->has('status'))
                            <p class="help-block">
                                {{ $errors->first('status') }}
                            </p>
                        @endif
                    </div>

                    <div class="form-group col-md-3">
                        <label for="subject">Materia</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            value="{{ old('subject', isset($user) ? $user->subject : '') }}">
                        @if ($errors->has('subject'))
                            <p class="help-block">
                                {{ $errors->first('subject') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="position">Cargo</label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{ old('position', isset($user) ? $user->position : '') }}">
                        @if ($errors->has('position'))
                            <p class="help-block">
                                {{ $errors->first('position') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="role">Rol</label>
                        <select name="roles_id" id="roles_id" class="form-select" required>
                            <option selected disabled>-</option>
                            @foreach ($roles as $id => $role)
                                <option value="{{ $id }}"
                                    {{ old('role', []) || (isset($user) && $user->role()->contains($id)) ? 'selected' : '' }}>
                                    {{ $role }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <p class="help-block">
                                {{ $errors->first('role') }}
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
