@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-secondary" href="{{ route('admin.schedule.index') }}">
            Atrás
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Crear Actividad
    </div>

    <div class="card-body">
        <form action="{{ route("admin.schedule.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('activity') ? 'has-error' : '' }}">
                <label for="activity">Actividad</label>
                <input type="text" id="activity" name="activity" class="form-control" value="{{ old('activity', isset($schedule) ? $schedule->activity : '') }}" required>
                @if($errors->has('activity'))
                    <p class="help-block">
                        {{ $errors->first('activity') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                <label for="date">Día</label>
                <input type="date" id="date" name="date" class="form-control " {{ old('date', isset($schedule) ? $schedule->date : '') }} required>
                @if($errors->has('date'))
                    <p class="help-block">
                        {{ $errors->first('date') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                <label for="time">Hora</label>
                <input type="time" id="time" name="time" class="form-control " {{ old('time', isset($schedule) ? $schedule->time : '') }} required>
                @if($errors->has('time'))
                    <p class="help-block">
                        {{ $errors->first('time') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                <label for="location">Lugar</label>
                <input type="text" id="location" name="location" class="form-control " {{ old('location', isset($schedule) ? $schedule->location : '') }} required>
                @if($errors->has('location'))
                    <p class="help-block">
                        {{ $errors->first('location') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('resposnsible') ? 'has-error' : '' }}">
                <label for="resposnsible">Responsable</label>
                <input type="text" id="resposnsible" name="resposnsible" class="form-control " {{ old('resposnsible', isset($schedule) ? $schedule->resposnsible : '') }} required>
                @if($errors->has('resposnsible'))
                    <p class="help-block">
                        {{ $errors->first('resposnsible') }}
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