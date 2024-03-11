<section id="profesores">
    <div class="bg-success-subtle">
        <div class="container  p-4">
            <h1 class="text-center">Nuestros Profesores</h1>
            <div class="row">
                @foreach ($teachers as $profe)
                    <div class="card col-lg-4 col-md-6 m-3" style="width: 18rem;">
                        <img src="{{ asset('img/teachers/teach1.jpg') }}" class="card-img-top img-rounded img-fluid"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $profe->fullName() }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $profe->subject }}</h6>
                            <p class="card-text">{{ $profe->message}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
