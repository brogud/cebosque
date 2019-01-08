<header id="header">
    <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
              <!--<div class="col-lg-12 col-sm-12 col-12 header-top-left">
                {!! Form::open(['url' => Request::url(), 'method' => 'get', 'class' => '']) !!}
                    <?php echo Form::select('lang', ['es' => 'Espa&ntilde;ol', 'en' => 'English'], 'es',['onchange' => "this.form.submit()", 'class' => 'float-select']); ?>  
                {!! Form::close() !!}-->
              </div>
          </div>			  					
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="/"><img src="img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="/">Inicio</a></li>
              </li>	
              <li class="menu-has-children parent-active"><a href="" class="sf-with-ul">Servicios</a>
                <ul style="display: none;">
                    <li><a href="#" class="menu-active">Caba&ntilde;as</a></li>
                    <li><a href="/rest" class="menu-active">Restaurante</a></li>
                    <li><a href="/attractions" class="menu-active">Atracciones</a></li>           		
                </ul>
              </li>			          					          		          
            <li><a href="/contact">Contacto</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->					      		  
        </div>
    </div>
</header><!-- #header -->