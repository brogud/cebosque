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