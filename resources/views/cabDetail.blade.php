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

        <div class="container">
            <div class="row">
                
                <section class="sample-text-area">
                    <!-- Description -->
                    <div class="col-lg-9 col-md-8 col-sm-12 mb-md-5 float-left">
                        <h3 class="text-heading">Sobre la caba&ntilde;a</h3>
                        {{ $cabin->getDescription() }} 


                    </div>
                    <!-- End Description -->

                    <!-- Features -->
                    <div class="col-lg-3 col-md-4 col-sm-12 information-box my-5 border-bottom float-left">
                        <div class="information-box-title">
                            <h6>Caracter&iacute;sticas</h6>
                        </div>
                        @foreach ($cabin->getFeatures() as $feature)
                            <div class="col-lg-12">
                                <b><span class="{{ $feature->getIcon() }}"></span></b><b>&nbsp;{{ $feature->getValue() }}</b>&nbsp;{{ $feature->getName()}}
                            </div>
                        @endforeach
                    </div>      
                    <!-- End Features --> 

                    <!-- Services -->
                    <div class="col-lg-9 col-md-8 col-sm-12 float-left">
                        <h3 class="text-heading mb-5">Servicios incluidos</h3>
                        <div class="align-items-center">
                            @foreach ($cabin->getServices() as $service)
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-6 float-left">
                                <div class="mb-1 col-lg-12 text-center"> 
                                    <span class="service-icon {{ $service->getIcon() }}"></span>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <h6> {{ $service->getName() }} </h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--End Services -->
                    <!-- More Info -->
                    <div class="col-lg-3 col-md-4 col-sm-12 float-left my-5 information-box border-bottom">
                            <div class="information-box-title">
                                <h6>Información de reservación</h6>
                            </div>
                            <p>Precio: {{ $cabin->getPrice() }}</p>
                            <p>Hora de ingreso: 14:00 a 22:00</p>
                            <p>Hora de salida: 13:00</p>
                            <div class="btn-centered-container">
                                <a href="#" class="primary-btn dark-btn  text-uppercase mt-2">Solicita una reservación</a>
                            </div>
                        </div>
                    </div>
                    <!-- End More Info -->
                </section>
            </div>
        </div>

        <!-- Gallery -->
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <h3 class="text-heading mb-5">Galer&iacute;a</h3>
                    <div class="row gallery-item">
                        @php
                            $i = true;
                            $y = true;
                        @endphp
                        @foreach ($cabin->getImages() as $image)
                            @if ($i) 
                                <div class="col-md-4">
                                    <a href="{{ $image }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ $image }});"></div></a>
                                </div>
                            @else
                                <div class="col-md-8">
                                    <a href="{{ $image }}" class="img-gal"><div class="single-gallery-image" style="background: url({{ $image }});"></div></a>
                                </div>
                            @endif
                                @php
                                    if($i == $y){
                                        $i = !$i;
                                    } else {
                                        $y = $i;
                                    }
                                @endphp               
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery -->

        

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
