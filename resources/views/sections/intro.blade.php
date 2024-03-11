<section id="intro">
    <div class="bg-light opacity-50 "
        style="background-image: url('{{ asset('img/bg-school3.jpg') }}'); background-size: cover;">
        <br>
        <br><br>
        <br>
        <br>
        <h1 class="mt-5 text-white font-weight-bolder position-relative text-center">
            {{ $settings['NOMBRE_INSTITUCION'] ?? '' }}</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="text-white position-relative text-center">
            {{ $settings['LEMA_INSTITUCIONAL'] ?? '' }}
        </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3 class="text-white position-relative  text-center ">
            {{ $settings['LEMA_INSTITUCIONAL2'] ?? '' }}
        </h3>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="bg-success-subtle">
        <div class="container p-4">
            
            <h1 class="text-center">Conócenos</h1>
            <div class="row">
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow ">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <p class="h3">Niveles de la Institución</p>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show ">
                        <div class="accordion-body">
                          {{ $settings['NIVELES_INSTITUCION'] ?? ''}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item shadow">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <p class="h3">Modalidades de la Institución</p>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            {{ $settings['MODALIDAD_INSTITUCION'] ?? ''}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item shadow">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <p class="h3">Misión Institucional</p>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            {{ $settings['MISION_INSTITUCIONAL'] ?? ''}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item shadow">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            <p class="h3">Visión Institucional</p> 
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                          <div class="accordion-body">
                            {{ $settings['VISION_INSTITUCIONAL'] ?? ''}}
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>
