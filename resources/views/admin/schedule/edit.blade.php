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
        Editar Actividad
    </div>

    <div class="card-body">
        <form action="{{ route("admin.schedule.store", [$schedule->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
            <div class="form-group {{ $errors->has('responsible') ? 'has-error' : '' }}">
                <label for="responsible">Responsable</label>
                <input type="text" id="responsible" name="responsible" class="form-control " {{ old('responsible', isset($schedule) ? $schedule->responsible : '') }} required>
                @if($errors->has('responsible'))
                    <p class="help-block">
                        {{ $errors->first('responsible') }}
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