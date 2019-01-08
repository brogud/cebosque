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
                            Contáctenos				
                        </h1>	
                        <p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/contact"> Contacto</a></p>
                    </div>	
                </div>
            </div>
        </section>

        <section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
                        <div class="map-wrap" style="width:100%; height: 445px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.8151753518464!2d-83.69717438554252!3d9.949330692885924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d146ca84fd67%3A0x50e598d966bdb16d!2sCaba%C3%B1as+El+Bosque!5e0!3m2!1ses!2scr!4v1545593897910" width="100%"" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>San Rafael de Santa Cruz, Turrialba</h5>
									<p>
										400 metros este del Restaurante La Cabaña
                                        Turrialba, Cartago, Costa Rica
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>2558-9039 / 8432-5125</h5>
									<p>Lunes a Domingo 7:00 – 22:00</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>alejo.cab.elbosque@gmail.com</h5>
									<p>¡Env&iacute;enos su consulta en cualquier momento!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="contactForm" action="/contact" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Correo electr&oacute;nico" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;" disabled>Enviar mensaje</button>											
									</div>
								</div>
							</form>	
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