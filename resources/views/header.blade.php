<header id="header">
    <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 col-sm-12 col-12 header-top-right">
                {!! Form::open(['url' => Request::url(), 'method' => 'get']) !!}
                
                  <?php echo Form::select('lang', ['es' => 'Espa&ntilde;ol', 'en' => 'English'], 'es',['onchange' => "this.form.submit()"]); ?>

                {!! Form::close() !!}
              </div>
          </div>			  					
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="packages.html">Packages</a></li>
              <li><a href="hotels.html">Hotels</a></li>
              <li><a href="insurance.html">Insurence</a></li>
              <li class="menu-has-children"><a href="">Blog</a>
                <ul>
                  <li><a href="blog-home.html">Blog Home</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li>	
              <li class="menu-has-children"><a href="">Pages</a>
                <ul>
                      <li><a href="elements.html">Elements</a></li>
                      <li class="menu-has-children"><a href="">Level 2 </a>
                        <ul>
                          <li><a href="#">Item One</a></li>
                          <li><a href="#">Item Two</a></li>
                        </ul>
                      </li>					                		
                </ul>
              </li>					          					          		          
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->					      		  
        </div>
    </div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>				
  <div class="container">
      <div class="row fullscreen align-items-center justify-content-between">
        <div class="col-lg-6 col-md-6 banner-left">
                  <h6 class="text-white">Away from monotonous life</h6>
                  <h1 class="text-white">Magical Travel</h1>
                  <p class="text-white">
                    If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
                  </p>
                  <a href="#" class="primary-btn text-uppercase">Get Started</a>
        </div>
        <div class="col-lg-4 col-md-6 banner-right">
    
        </div>
    </div>	
  </div>			
</section>
        <!-- End banner Area -->