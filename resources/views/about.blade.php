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
                            Sobre nosotros		
                        </h1>	
                        <p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/contact"> Sobre nosotros</a></p>
                    </div>	
                </div>
            </div>
        </section>

        <section class="about-info-area section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 info-left">
                        <img class="img-fluid" src="https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15025100_2044150449144590_5670914630885840114_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=887c393b976477ceda6fad3826e2b6c4&oe=5C8FD7B6" alt="">
                    </div>
                    <div class="col-lg-6 info-right">
                        <h6>Sobre nosotros</h6>
                        <h1>¿Quienes somos?</h1>
                        <p style="text-align: justify;">
                            Somos un negocio familiar que inició este proyecto en 2010, con la idea de ofrecer un lugar de descanso, paz con la naturaleza, tranquilidad y privacidad.  Nuestra misión es proveer un excelente servicio en la estadía, alimentación y descanso en un lugar rodeado de naturaleza.
                        </p>
                        <p style="text-align: justify;">
                                Nos caracterizamos por nuestra honestidad, responsabilidad, preservar y proteger el ambiente y la calidad de nuestro servicio.
                        </p>
                    </div>
                </div>
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