<!DOCTYPE html>
<html lang="en">
	
  <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		

    <title>
    <?php
      
    
         wp_title( '|', true, 'right' );
    
       
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        //if ( $site_description && ( is_home() || is_front_page() ) )
            echo "  $site_description";
    
    
        ?>
    </title>


		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php bloginfo('template_directory'); ?>/css/styles.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
	</head>

<body>
<!-- Wrap all page content here -->
<div id="wrap">

 
<header class="masthead">

  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_directory'); ?>/images/1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Gesichtsbehandlungen</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_directory'); ?>/images/2.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Körperbehandlungen</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_directory'); ?>/images/3.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Massagen</h2>
              <p></p>
            </div>
          </div>
        </div> 
        <div class="item">
          <img src="<?php bloginfo('template_directory'); ?>/images/4.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Zusatzbehandlungen</h2>
              <p></p>
            </div>
          </div>
        </div>      
      </div><!-- /.carousel-inner -->
      <div class="logo">Kosmetikstudio<br>Beautycode<br>Stuttgart<br>0711 46905052</div> 
        
    </div>
    <!-- /.carousel -->
  
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Über uns</a></li>
          <li class="dropdown">
            <a href="#sectionBehandlungen" class="dropdown-toggle" data-toggle="dropdown">Behandlungen <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Gesichtsbehandlungen</a></li>
              <li><a href="#">Körperbehandlungen</a></li>
              <li><a href="#">Massagen</a></li>
              <li><a href="#">Zusatzbehandlungen</a></li>
              <li><a href="#">Hand und Fuß</a></li>
              <li><a href="#">Haarentfernung</a></li>
            </ul>
          </li>
          <li><a href="#section4">Wo sind wir?</a></li>
          <li><a href="#section5">Kontakt</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>beautycode<br>ihr Ruhepol in Stuttgart</h1>
    </div>
    
    <p class="lead text-center"> 
      The Firm has been providing Professional Cosmetic and Beauty Services in the Stuttgart since 2011.
    </p> 
    
    <hr>
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>
  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Über uns</h1>
      
      <hr>
     
      <p>Mein name ist <b>Josipa Juric</b> und ich bin staatlich anerkannte Kosmetikerin. 
        Egal, ob für ein Kurz-Programm während der Mittagspause oder einen 
        Kurz-Urlaub mit Behandlungen vom Kopf bis zu den Füßen, ich freue mich auf Ihren Besuch.
        Bei warmem Licht und wohliger Entspannungsmusik genießen Sie Behandlungen, 
        die Ihre Seele streicheln, den Körper formen und die Haut regenerieren.<br><br>
        <b>Genießen Sie den Aufenthalt bei uns!</b><br><br><br>
        <b>Wir verwenden Thalago Produkte:</b><br><br>
        Seit über 40 Jahren ist THALGO die unbestrittene Größe auf dem Gebiet maritimer Pflege. Profitieren Sie von der Erfahrung echter Pflegeexperten und erleben Sie eine individuelle, für Sie zusammengestellte Gesichtsbehandlung, denn Meereskosmetik-Produkte arbeiten im Einklang mit der Haut und entsprechen deren physiologischen Abläufen.</p>
	       
      <hr>

      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3" id="sectionBehandlungen">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Behandlungen</h2></div>
</section>
  
<div class="divider" id="sectionBehandlungen"></div>
 
<div id="products"></div> 

<script id="product_template" type="text/html">

{{#katalog}}
    <section class="bg-4" id="section{{name}}">

        <div class="container">
          

          
              <div class="col-sm-4 col-xs-6 product-box">
                <div class="panel panel-box">
                     <div class="catheader"><h4>{{name}}</h4></div>        
                     <div class="catimage"><img src="<?php bloginfo('template_directory'); ?>/images/{{bild}}" class="img-responsive catimage1"></div>
                </div>        
              </div>
        

          {{#behandlungen}}    
            <div class="col-sm-4 col-xs-6 product-box">
              <div class="panel panel-box">
                  <product>
                      <p>{{text}}</p>
                      <h4>{{titel}}</h4> <br> <span>Dauer ca. {{dauer}} min.<br>€ {{preis}}</span>
                  </product>            
              </div>        
            </div>
          {{/behandlungen}} 


        </div><!--/container-->

    </section>
{{/katalog}}

</script>

<div class="divider"></div>  

<div class="divider" id="section4"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
  
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Wo sind wir?</h1>
  </div>   
       
  <div id="map-canvas"></div>
  
  <hr>
  
  <div class="col-sm-8"></div>
  <div class="col-sm-3 pull-right">

      <address>
        beautycode Stuttgart<br>
        <span id="map-input">
        Haußmannstraße 141<br>
        70188 Stuttgart</span><br>
        0711 46905052
      </address>
    
      <address>
        <strong>Email an uns</strong><br>
        <a href="mailto:#">info@beautycode-stuttgart.de</a>
      </address>          
  </div>
  
</div><!--/row-->
  
<div class="divider" id="section5"></div>  

<div class="row">
  
  <hr>
  
  <div class="col-sm-9 col-sm-offset-1">
      
      <div class="row form-group">
        <div class="col-md-12">
        <h1>Kontaktieren Sie uns</h1>        
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="firstName" name="name" placeholder="Ihr Name">
        </div>
        <div class="col-xs-6">
          <input type="text" class="form-control" id="organization" name="organization" placeholder="Firma(Optional)">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="col-xs-5">
          <input type="text" class="form-control" name="phone" placeholder="Telefon">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea class="form-control" placeholder="Nachricht"></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Absenden</button>
          </div>
      </div>
    
  </div>
  
</div><!--/row-->
  

  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright ©2014 Salvamac.com</p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


	<!-- script references -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.8.1/mustache.min.js"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
	</body>
</html>