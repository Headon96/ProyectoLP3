@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">  
       
        
       
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image novi-background bg-primary">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
                <a class="navbar-brand" href="{{ url('/perfil') }}" style="color:black">
                     Perfil
                </a>
                <a class="navbar-brand" href="{{ url('/mensajes') }}" style="color:black">
                     Mensajes
                </a> 
                <a class="navbar-brand" href="{{ url('/publicaciones') }}" style="color:black">
                     Publicaciones
                </a> 
          </ul>
        </div>
      </section>
      <!-- Our Story-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2><span class="text-dark">Nosotros</span></h2>
          <div class="row row-30 justify-content-xl-between">
            <div class="col-md-6 col-xl-6">
              <p class="big">Nuestras herramientas le permitiran encontrar profesionales de alta calidad para que usted tenga una mejor experiencia al momento de buscar servicios.</p>
              <div class="box-shadow-2">
                <div class="box-shadow-header">
                  <div class="unit flex-column flex-md-row">
                    <div class="unit-left">
                      <div class="heading-5">Titulo</div>
                    </div>
                    <div class="unit-body">
                      <p>Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno</p>
                    </div>
                  </div>
                </div><img class="img-responsive" src="images/about-1-569x338.jpg" alt="" width="569" height="169"/>
              </div>
            </div>
            <div class="col-md-6 col-xl-5">
              <ul class="list-lg">
                <li>
                  <div class="heading-5">texto 1</div>
                  <p class="p-offset-1">Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno</p>
                </li>
                <li>
                  <div class="heading-5">texto 2</div>
                  <p class="p-offset-1">Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno</p>
                </li>
                <li>
                  <div class="heading-5">texto 3</div>
                  <p class="p-offset-1">Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno</p>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </section>     
      <!-- Clientes-->
      <section class="section section-lg bg-gray-800">
        <div class="container text-center text-xl-left">
          <h2>Nuestros <span class="text-light">Clientes</span></h2>
          <div class="owl-carousel owl-carousel-4 text-center" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="6" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-1-133x65.png" alt="" width="133" height="32"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-2-117x61.png" alt="" width="117" height="30"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-3-147x70.png" alt="" width="147" height="35"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-4-139x64.png" alt="" width="139" height="32"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-5-123x67.png" alt="" width="123" height="33"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-6-151x72.png" alt="" width="151" height="36"/></a></div>
          </div>
        </div>
      </section>
      <!-- Our Team-->
      <section class="section section-lg bg-default">
        <div class="container text-center text-lg-left">
          
          <div class="row row-40">
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-1-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Kate White</h5>
                    <div class="subtitle">Manager</div>
                  </div>
                </div>
                <div class="content">Texto de introduccion prueba 1.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-2-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Victor Jackson</h5>
                    <div class="subtitle">Consultor Financiero</div>
                  </div>
                </div>
                <div class="content">Texto de introduccion prueba 2.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-3-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title">Olivia Smith</h5>
                    <div class="subtitle">Administrador</div>
                  </div>
                </div>
                <div class="content">Texto de introduccion prueba 3.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="section footer-classic">
        <div class="footer-inner-1">
          <div class="container">
            <div class="row row-40">
              <div class="col-md-5 col-lg-3">
                <h5>Our Contacts</h5>
                <ul class="contact-list font-weight-bold">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        <div class="icon icon-sm icon-primary novi-icon mdi mdi-phone"></div>
                      </div>
                      <div class="unit-body"><a href="tel:#">+51 (321) 123 124</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left">
                        <div class="icon icon-sm icon-primary novi-icon mdi mdi-clock"></div>
                      </div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li>Atención: 8:00–17:00</li>
                          <li>Fines de semana: Cerrado</li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul><a class="d-inline-block big" href="mailto:#">email@pruebalink.org</a>
              </div>
              
              <div class="col-md-12 col-lg-4">
                
              </div>
            </div>
          </div>
        </div>
        <div class="footer-inner-2">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Derechos reservados</p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
@endsection
