@include('head')

        <!-- CSS -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                            Caba&ntilde;a {{ $cabin->getName() }}
                        </h1>
                        <p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/cab"> Caba&ntilde;as </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Caba&ntilde;a {{ $cabin->getName() }} </a>  </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sample-text-area">
            <div class="container">
                <h3 class="text-heading">Sobre la caba&ntilde;a</h3>
                <p class="sample-text">
                    {{ $cabin->getDescription() }}  
                </p>
            </div>
        </section>

        <section>
            <div class="container">
                <h3 class="text-heading mb-5">Servicios incluidos</h3>
                <div class="row align-items-center">
                    
                @foreach ($cabin->getServices() as $service)
                    <div class="mb-5 col-lg-4 col-md-6 d-flex flex-column">
                        <div class="mb-2 col-lg-12 text-center"> 
                            <span class="service-icon {{ $service->getIcon() }}"></span>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h6> {{ $service->getName() }} </h6>
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>

        </section>

        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <h3>Galer&iacute;a</h3>
                    <div class="row gallery-item">
                        @foreach ($cabin->getImages() as $image)
                        <div class="col-md-4">
                            <a href="{{ $image }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ $image }});"></div></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        

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
