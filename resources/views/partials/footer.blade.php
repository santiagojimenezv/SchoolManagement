<footer id="footer ">
    <div class="footer-top m-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-info text-center">
                    <img src="img/logo.jpg" width="50" alt="iemalteria" class="img-fluid img-thumbnail">
                    <p> "{!! $settings['LEMA_INSTITUCIONAL'] ?? '' !!}"</p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Enlaces Útiles</h4>
                    <ul>
                        <li> <a href="#intro">Intro</a></li>
                        <li> <a href="#personal">Personal</a></li>
                        <li> <a href="#profesores">Profesores</a></li>
                        <li> <a href="#agenda">Agenda</a></li>
                        <li> <a href="#ubicacion">Ubicación</a></li>
                        <li> <a href="#proyectos">Proyectos</a></li>
                        @guest
                            <li> <a href="{{ route('login') }}">Login</a></li>
                        @endguest
                        @auth
                            <li> <a href="{{ route('admin.home') }}">Admin Panel</a></li>
                        @endauth
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contáctenos</h4>
                    <p>
                        <strong>Dirección:</strong> {!! $settings['DIRECCION_SEDE_PRINCIPAL'] ?? '' !!} <br>
                        <strong>Teléfono:</strong> {!! $settings['CONTACTO_TELEFONO'] ?? '' !!} <br>
                        <strong>Email:</strong> {!! $settings['CONTACTO_EMAIL'] ?? '' !!} <br>
                        <strong>Horario:</strong> {!! $settings['HORARIO_INSTITUCIONAL'] ?? '' !!} <br>
                    </p>

                    <div class="social-links">

                        <a href=" {!! $settings['INSTAGRAM_URL'] ?? '' !!} " class="fs-1">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href=" {!! $settings['GOOGLE_URL'] ?? '' !!} " class="fs-1">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href=" {!! $settings['FACEBOOK_URL'] ?? '' !!} " class="fs-1">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </div>
                    <div id="sfcxfkc2m7s66s51c9abw2plj6ja5jqf7m7"></div>
                    <script type="text/javascript"
                        src="https://counter6.optistats.ovh/private/counter.js?c=xfkc2m7s66s51c9abw2plj6ja5jqf7m7&down=async" async>
                    </script><noscript><a href="https://www.contadorvisitasgratis.com"
                            title="contador de visitas para blogger gratis"><img
                                src="https://counter6.optistats.ovh/private/contadorvisitasgratis.php?c=xfkc2m7s66s51c9abw2plj6ja5jqf7m7"
                                border="0" title="contador de visitas para blogger gratis"
                                alt="contador de visitas para blogger gratis"></a></noscript>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="text-center">
                <div class="copyright pt-4">
                    &copy; <strong>Institución Educativa Maltería</strong>, todos los derechos reservados, 2023
                    <div class="credits">
                        Diseñado por <a href="https://github.com/juanjo00sg">JJSG</a> & <a
                            href="https://www.autonoma.edu.co/">UAM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
