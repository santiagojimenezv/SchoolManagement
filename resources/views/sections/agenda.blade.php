<section id="agenda">
    <div class="bg-info-subtle">
        <div class="container  p-4">
            <h1 class="text-center">Agenda del Mes</h1>
            <div class="row">
                <div class="table-responsive">
                    <table class=" table table-striped table-hover">
                        <thead>
                            <colgroup>
                            <tr class="table-primary">
                                <th scope="col">
                                    Actividad
                                </th>
                                <th scope="col">
                                    Día
                                </th>
                                <th scope="col">
                                    Hora
                                </th>
                                <th scope="col">
                                    Lugar
                                </th>
                                <th scope="col">
                                    Responsable
                                </th>
                            </tr>
                            </colgroup>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $activity)
                                <tr data-entry-id="{{ $activity->id }}">
                                    <td scope="row">
                                        {{ $activity->activity ?? '' }}
                                    </td>
                                    <td >
                                        {{ $activity->date->format('d M Y') ?? '' }}
                                    </td>
                                    <td >
                                        {{ substr($activity->time, 0, -3) ?? '' }}
                                    </td>
                                    <td >
                                        {{ $activity->location ?? '' }}
                                    </td>
                                    <td >
                                        {{ $activity->responsible ?? '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</section>
