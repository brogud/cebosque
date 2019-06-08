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
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nuestras caba&ntilde;as				
							</h1>	
							<p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Caba&ntilde;as</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start cab-one Area -->
            @php
                $i = 1;
            @endphp
            @foreach ($cabins as $cab)
				@if ($i % 2) 
					@if ($i == 1)
						<section class="insurence-one-area section-gap">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-md-6 float-md-right insurence-left">
										<img class="img-fluid img-one" src="{{ asset('img/CabPictures/' . $cab->getImages()[0])  }}" alt="">
									</div>
									<div class="col-md-6 float-md-left insurence-right">
										<h1>Caba&ntilde;a {{$cab->getName()}}</h1>
										<p>{{$cab->getDescription()}}</p>
        		                    	<a href="/cab/{{$cab->getIdentifier()}}" class="primary-btn text-uppercase">Ver m&aacute;s</a>
									</div>
								</div>
							</div>	
						</section>
					@else
						<section class="insurence-one-area pb-120">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-md-6 float-md-right insurence-left">
										<img class="img-fluid img-one" src="{{ asset('img/CabPictures/' . $cab->getImages()[0])  }}" alt="">
									</div>
									<div class="col-md-6 float-md-left insurence-right">
										<h1>Caba&ntilde;a {{$cab->getName()}}</h1>
										<p>{{$cab->getDescription()}}</p>
        		                    	<a href="/cab/{{$cab->getIdentifier()}}" class="primary-btn text-uppercase">Ver m&aacute;s</a>
									</div>
								</div>
							</div>	
						</section>
					@endif

                @else
					<section class="insurence-two-area pb-120">
						<div class="container">
							<div class="row align-items-center">
							<div class="col-md-6 order-first order-md-last insurence-left">
									<img class="img-fluid img-two" src="{{ asset('img/CabPictures/' . $cab->getImages()[0])  }}" alt="">
								</div>
								<div class="col-md-6 insurence-right">
									<h1>Caba&ntilde;a {{$cab->getName()}}</h1>
									<p>{{$cab->getDescription()}}</p>
									<a href="/cab/{{$cab->getIdentifier()}}" class="primary-btn text-uppercase">Ver m&aacute;s</a>
								</div>					
							</div>
						</div>	
					</section>
                @endif
                    @php
						$i++
                    @endphp               
            @endforeach

			
			
            
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