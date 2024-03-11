<section id="proyectos">
    <div class="bg-info-subtle">
        <div class="container  p-5">
            <h1 class="text-center">Proyectos Pedagógicos Transversales</h1>
            <div class="row p-3 justify-content-center ">
                <div class="col-2 p-2">
                    <h4 >{{ $settings['PROYECTOS_VIDA_NOMBRE'] ?? '' }}</h4>                    
                </div>
                <div class="col-2 p-2">
                    <h4>{{ $settings['PROYECTOS_SEXED_NOMBRE'] ?? '' }}</h4>                    

                </div>
                <div class="col-2 p-2">
                    <h4>{{ $settings['PROYECTOS_PAZ_NOMBRE'] ?? '' }}</h4>                    
                </div>
                <div class="col-2 p-2">
                    <h4>{{ $settings['PROYECTOS_AMBIENTE_NOMBRE'] ?? '' }}</h4>                    
                </div>
                <div class="col-2 p-2">
                    <h4>{{ $settings['PROYECTOS_FINANZAS_NOMBRE'] ?? '' }}</h4>                    
                </div>
            </div>
            <div class="row  justify-content-center ">
                <div class="col-2 p-2">
                    <p>{{ $settings['PROYECTOS_VIDA_DESC'] ?? '' }}</p>                    
                </div>
                <div class="col-2 p-2">
                    <p>{{ $settings['PROYECTOS_SEXED_DESC'] ?? '' }}</p>                    
                </div>
                <div class="col-2 p-2">
                    <p>{{ $settings['PROYECTOS_PAZ_DESC'] ?? '' }}</p>                    
                </div>
                <div class="col-2 p-2">
                    <p>{{ $settings['PROYECTOS_AMBIENTE_DESC'] ?? '' }}</p>                    
                </div>
                <div class="col-2 p-2">
                    <p>{{ $settings['PROYECTOS_FINANZAS_DESC'] ?? '' }}</p>                    
                </div>
            </div>
        </div>
    </div>

</section>
