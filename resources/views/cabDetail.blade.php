@include('head')

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css') }}">				
        <link rel="stylesheet" href="{{ URL::asset('/css/nice-select.css') }}">							
        <link rel="stylesheet" href="{{ URL::asset('/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/owl.carousel.css') }}">				
        <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
    </head>  

    <body>
        @include('header')

        <section class="relative about-banner">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Caba&ntilde;a {{ $cabDetail['cabName'] }}	
                        </h1>
                        <p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/cab"> Caba&ntilde;as </a> <span class="lnr lnr-arrow-right"></span> <a href="/#"> Caba&ntilde;a  {{ $cabDetail['cabName'] }}</a>  </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sample-text-area">
            <div class="container">
                <h3 class="text-heading">Un lugar de relajaci&oacute;n</h3>
                <p class="sample-text">
                    Se puede imaginar estar en este hermoso restaurante degustando de un exquisito platillo y disfrutando de la naturaleza y sonidos de las aves, un lugar excelente para relajarse y salir de la rutina. Ofrecemos a todos nuestros clientes alta calidad en cada uno de los platillos ofrecidos en un ambiente de relajaci&oacute;n en medio de la naturaleza con el mejor servicio calificado.
                </p>
            </div>
        </section>

        @include('footer')

        <script src="{{ URL::asset('/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ URL::asset('/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('/js/vendor/bootstrap.min.js') }}"></script>			
        <script src="{{ URL::asset('/js/jquery-ui.js') }}"></script>					
        <script src="{{ URL::asset('/js/easing.min.js') }}"></script>			
        <script src="{{ URL::asset('/js/hoverIntent.js') }}"></script>
        <script src="{{ URL::asset('/js/superfish.min.js') }}"></script>	
        <script src="{{ URL::asset('/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::asset('/js/jquery.magnific-popup.min.js') }}"></script>						
        <script src="{{ URL::asset('/js/jquery.nice-select.min.js') }}"></script>					
        <script src="{{ URL::asset('/js/owl.carousel.min.js') }}"></script>							
        <script src="{{ URL::asset('/js/mail-script.js') }}"></script>	
        <script src="{{ URL::asset('/js/main.js') }}"></script>	

    </body>
</html>
