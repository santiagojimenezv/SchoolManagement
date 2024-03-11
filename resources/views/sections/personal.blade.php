<section id="personal">
    <div class="bg-info-subtle">
        <div class="container p-4">
            <h1 class="text-center">Personal</h1>
            <div class="row">
                @foreach ($staff as $personal)
                    <div class="card col-lg-4 col-md-6 m-3" style="width: 18rem;">
                        <img src="{{ asset('img/staff/staff1.jpg') }}" class="card-img-top img-rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $personal->fullName() }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $personal->position }}</h6>
                            <p class="card-text">{!! $personal->message ?? '' !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
