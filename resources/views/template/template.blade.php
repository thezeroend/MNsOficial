<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Marinas Nacionais | Home</title>

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

  </head>
  <body> 
      
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <span>Previsão do tempo: </span>
                     <i class="fa fa-circle-o"></i>
                     <i class="fa fa-circle-o"></i>
                     <i class="fa fa-circle-o"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
         <!-- <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a> -->
          <!-- IMG BASED LOGO  -->
           <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo" width="200px;"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
            <li class="dropdown">
              <a href="{{ route('perfil') }}" class="dropdown-toggle" data-toggle="dropdown">Perfil <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('perfil') }}">Historia</a></li>
                <li><a href="#">Apresentação</a></li>
                <li><a href="#">Missão e Visão</a></li>      
                <li><a href="#">Conheça</a></li>        
              </ul>
            </li>           
            <li class="dropdown">
              <a href="{{ route('servicos') }}" class="dropdown-toggle" data-toggle="dropdown">Serviços <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('servicos') }}">Locação de Vagas</a></li>
                <li><a href="#">Restaurante</a></li>        
				<li><a href="#">Lavanderia</a></li>
             	<li><a href="#">Posto de Combustivel</a></li>
              </ul>
            </li> 
            <li class="dropdown">
              <a href="{{ route('noticia') }}" class="dropdown-toggle" data-toggle="dropdown">Notícias <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('noticia') }}">Ultimas Notícias</a></li>
                <li><a href="#">Galeria de Fotos</a></li>        
				<li><a href="#">Publicações</a></li>
              </ul>
            </li>      
            <li class="dropdown">
              <a href="{{ route('meioambiente') }}" class="dropdown-toggle" data-toggle="dropdown">Meio Ambiente <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('meioambiente') }}">Politica de Meio Ambiente</a></li>
                <li><a href="#">Código de Conduta</a></li>        
				<li><a href="#">Bandeira Azul</a></li>
             	<li><a href="#">Bandeira Azul individual</a></li>
              </ul>
            </li> 
            <li><a href="{{ route('contato') }}">Contato</a></li>
            <li><a href="{{ route('clienteteste') }}">Espaço do Cliente</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->

    @yield('conteudo')

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Paginas</h4>
                <ul>
                  <li><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="">Perfil</a></li>
                  <li><a href="">Serviços</a></li>
                  <li><a href="{{ url('/noticia') }}">Notícias</a></li>
                  <li><a href="">Meio Ambiente</a></li>
                  <li><a href="">Espaço do Cliente</a></li>
                  <li><a href="">Politica de privacidade</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Novidades</h4>
                <p>Receba nossas ultimas atualizações e noticias</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Digite seu e-mail">
                  <button class="mu-subscribe-btn" type="submit">Cadastrar</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
				<!-- espaço em branco widget -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
               <img src="assets/img/logo.png" width="200px" />
                <h4>Marinas Nacionais</h4>
                <address>
                  <p>Estrada Guarujá-Bertioga, km 20,5 - Guarujá - SP</p>
                  <p>CP 147 CEP 11446-002  </p>
                  <p>Tel.: 13 3305 - 1421 / 13 98212 - 5178</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; Copyright 2010 a 2019 - Marinas Nacionais Ltda. | Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>