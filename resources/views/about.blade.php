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
                        <img class="img-fluid" src="img/aboutUs.jpg" alt="">
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

        <section id="2" data-scroll-offset="50" class="testimonial-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Testimonios de nuestros clientes</h1>
                            <p>Todos los comentarios son tomados desde nuestra p&aacute;gina de Facebook </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="descc" style="width: 100%">
                                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flucy.loboarrollo%2Fposts%2F506889306444584&width=auto&show_text=true&appId=520354261780180" height="280" style="border:none;overflow:hidden" frameborder="1" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="descc" style="width: 100%">
                                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fanita.granados.900388%2Fposts%2F283667355746704&width=auto" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="1" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="descc" style="width: 100%">
                                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffrancela.alvarado.35%2Fposts%2F1069170899916878&width=auto" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>	
                            </div>
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