@include('head')

            <!-- CSS -->
            <link rel="stylesheet" href="../css/linearicons.css">
            <link rel="stylesheet" href="../css/font-awesome.min.css">
            <link rel="stylesheet" href="../css/bootstrap.css">
            <link rel="stylesheet" href="../css/magnific-popup.css">
            <link rel="stylesheet" href="../css/jquery-ui.css">				
            <link rel="stylesheet" href="../css/nice-select.css">							
            <link rel="stylesheet" href="../css/animate.min.css">
            <link rel="stylesheet" href="../css/owl.carousel.css">				
            <link rel="stylesheet" href="../css/main.css">
    </head>  

    <body>
        @include('header')

        <section class="relative about-banner">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Caba&ntilde;a 			
                        </h1>	
                        <p class="text-white link-nav"><a href="/">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/contact"> Caba&ntilde;a </a></p>
                    </div>	
                </div>
            </div>
        </section>
        {{ print_r($cabDetail) }}

        <section class="sample-text-area">
            <div class="container">
                <h3 class="text-heading">Un lugar de relajaci&oacute;n</h3>
                <p class="sample-text">
                    Se puede imaginar estar en este hermoso restaurante degustando de un exquisito platillo y disfrutando de la naturaleza y sonidos de las aves, un lugar excelente para relajarse y salir de la rutina. Ofrecemos a todos nuestros clientes alta calidad en cada uno de los platillos ofrecidos en un ambiente de relajaci&oacute;n en medio de la naturaleza con el mejor servicio calificado.
                </p>
            </div>
        </section>

        @include('footer')

        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>			
        <script src="../js/jquery-ui.js"></script>					
        <script src="../js/easing.min.js"></script>			
        <script src="../js/hoverIntent.js"></script>
        <script src="../js/superfish.min.js"></script>	
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>						
        <script src="../js/jquery.nice-select.min.js"></script>					
        <script src="../js/owl.carousel.min.js"></script>							
        <script src="../js/mail-script.js"></script>	
        <script src="../js/main.js"></script>	

    </body>
</html>
