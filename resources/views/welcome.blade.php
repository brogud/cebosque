@include('head')
          
        <!-- CSS -->
          <link rel="stylesheet" href="css/linearicons.css">
          <link rel="stylesheet" href="css/font-awesome.min.css">
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/magnific-popup.css">
          <link rel="stylesheet" href="css/jquery-ui.css">				
          <link rel="stylesheet" href="css/nice-select.css">							
          <link rel="stylesheet" href="css/animate.min.css">
          <link rel="stylesheet" href="css/owl.carousel.css">				
          <link rel="stylesheet" href="css/main.css">
    </head>  

    <body>
        @include('header')

        <section class="popular-destination-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nuestros servicios</h1>
                            <p>Nos caracterizamos por nuestros servicios e instalaciones de excelente calidad</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/d1.jpg" alt="">
                            </div>
                            <div class="desc">		
                                <h4>Caba&ntilde;as de madera</h4>
                                <p>rodeadas de un gran bosque</p>	
                                <a href="#" class="price-btn">Conoce más</a>		
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/d2.jpg" alt="">
                            </div>
                            <div class="desc">			
                                <h4>Restaurante</h4>
                                <p>Gastronomía costarricense</p>	
                                <a href="#" class="price-btn">Conoce más</a>		
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/d3.jpg" alt="">
                            </div>
                            <div class="desc">			
                                <h4>Atracciones</h4>
                                <p>piscinas, senderos y más</p>	
                                <a href="#" class="price-btn">Conoce más</a>		
                            </div>
                        </div>
                    </div>												
                </div>
            </div>	
        </section>





    
        @include('footer')

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
        <script src="js/jquery-ui.js"></script>					
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>					
        <script src="js/owl.carousel.min.js"></script>							
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	

    </body>
</html>