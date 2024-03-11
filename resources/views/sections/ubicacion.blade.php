<section id="ubicacion">
    <div class="bg-success-subtle">
        <div class="container p-5">
            <h1 class="text-center pb-5">Ubicación</h1>
            <div class="row">
                <div class="col-7">
                    <iframe src="{!! $settings['GOOGLE_MAPS_URL'] !!}" width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-5">
                    <h3>Contamos con 3 sedes</h3>
                    <br>
                    <h5>La sede principal esta ubicada en <p class="text-decoration-underline">{!! $settings['DIRECCION_SEDE_PRINCIPAL'] !!}
                        </p>
                    </h5>
                    <h5>La sede Porvenir esta ubicada en <p class="text-decoration-underline">{!! $settings['DIRECCION_SEDE_PORVERNIR'] !!}
                        </p>
                    </h5>
                    <h5>La sede La Colonia esta ubicada en <p class="text-decoration-underline">{!! $settings['DIRECCION_SEDE_COLONIA'] !!}
                        </p>
                    </h5>
                </div>
            </div>

        </div>
</section>
