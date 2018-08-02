
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
<title>xpertise | Centro Odontologico</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" ><span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
         <li><a href="#inicio">Inicio</a></li>
          <li><a href="#tratamientos">Tratamientos</a></li>
          <li><a href="#nosotros">Nosotros</a></li> 
          <li><a href="#galeria">Galeria</a></li>
          <li><a href="#equipo">Equipo</a></li>
          <li><a href="#testimonios">Testimonios</a></li>
          <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >Has Una Cita <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="login">Inicia Sesion</a></li>
                      <li><a href="register">Registrate</a></li>
                    
          </ul>

        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>

  @if (session()->has('flash'))
    
        <div class="alert alert-danger">{{ session('flash')}}</div>
    
    @endif
  <!-- banner text --> 
    <div class="banner" id="inicio"> 
    <div class="slider-banner">
            <div data-lazy-background="images/slides/1.jpg"> 
                <h3 data-pos="['68%', '-40%', '60%', '12%']" data-duration="700" data-effect="move">
                    Nuestro objetivo es
                </h3> <br>
                <p data-pos="['75%', '110%', '75%', '12%']" data-duration="700" data-effect="move">
                    asegurar una sonrisa bella en tu rostro...
                </p> 
            </div>
            <div data-lazy-background="images/slides/3.jpg"> 
                <h3 data-pos="['75%', '-40%', '60%', '12%']" data-duration="700" data-effect="move">
                    Recibe el mejor servicio
                </h3> <br>
                <p data-pos="['75%', '110%', '75%', '12%']" data-duration="700" data-effect="move">
                    con una sonrisa... 
                </p>
            </div>
             
        </div>
      <!-- banner text --> 
    </div> 
</section>
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <div class="panel-body">
                    
          </div>
      <h3>Bienvenido a la Clinica Dental EXPERTISE</h3>
      <p>En la Clínica Dental Expertise brindamos al usuario un servicio de consulta odontológica integral, especializado en Diseño de Sonrisa.
        Aseguramos una alta calidad a través de un equipo de profesionales con reconocida experiencia, que utilizan tecnología avanzada y productos cuidadosamente seleccionados.</p>

    <div class="site-info">
        <div class="phoneInfo"><h6>Llama Hoy: </h6><a href="#">969611992</a></div>
        <div class="timeInfo"><h6>Horario de Apertura: </h6> <em>Lunes–Sabado: 9am–8pm; Domingo: 10am–1pm</em></div>
    </div>   
   </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="tratamientos" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Tratamientos</h2>
                <p class="wow fadeInDown animated">En el centro Odontologico Expertise <br> te brindamos...</p>
            </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-happy"></span>
        <div class="services-content">
          <h5>Examenes de rutina</h5>
          <p>El odontologo realiza un examen bucal completo para tener una idea clara acerca de la condición de su boca.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-layers"></span>
        <div class="services-content">
          <h5>Urgencias Dentales</h5>
          <p>Urgencia dental es toda atención que involucra resolver síntomas de dolor agudo, asociados a piezas dentarias y mucosas que lo rodean.  </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-wine"></span>
        <div class="services-content">
          <h5>Higiene Dental</h5>
          <p>Su dentista le enseñarán a detectar las áreas que demandan una atención especial durante el cepillado y la limpieza con hilo dental.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-hotairballoon"></span>
        <div class="services-content">
          <h5>Rellenos Dental</h5>
          <p>Se trata de un modo de restaurar un diente dañado por caries y devolverle su función y forma normales. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
        <div class="services-content">
          <h5>Protesis Dental y Caries </h5>
          <p>La prótesis dental es un dispositivo diseñado para reemplazar los dientes perdidos.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-scope"></span>
        <div class="services-content">
          <h5>Blanqueamiento Dental</h5>
          <p>Logra reducir varios tonos el color original de las piezas dentales, dejando los dientes más blancos.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!--About-->
<section id="nosotros" class="content-block data-section nopad content-3-10">
    <div class="image-container col-sm-6 col-xs-12 pull-left">
        <div class="background-image-holder">

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
                <div class="editContent">
                    <h3>Nosotros</h3>
                </div>
                <div class="editContent">
                <strong>Vision</strong>
                    <p>Ser el sistema de atención dental líder en el Perú, con la más avanzada tecnología en manos de un equipo integrado por odontólogos de primer nivel, técnicos y administrativos, comprometidos con el mejoramiento continuo en busca de un país que sonría sanamente.</p>
                    <strong>Mision</strong>
                    <p>Brindar atención dental de calidad y un servicio de excelencia a nuestros pacientes y a las personas cuya protección de salud nos ha sido confiada.</p>
                </div>
                <a href="#gallery" class="btn btn-outline btn-outline outline-dark">Nuestra Galeria</a>
            </div>
        </div><!-- /.row-->
    </div><!-- /.container -->
</section>


<!-- package section -->
<section class="video-section">
  <div class="container"> 
    <div class="row">  
            <div id="content24" data-section="content-24" class="data-section"> 
            <div class="col-md-6">
                <h3 class="eidtContent">Caries dental</h3>
                <p class="eidtContent">La caries dental es la destrucción de los tejidos de los dientes causada por la presencia de ácidos producidos por las bacterias de la placa depositada en las superficies dentales. Este deterioro de los dientes está muy influenciado por el estilo de vida, es decir influye lo que comemos, la forma cómo cuidamos nuestros dientes (nuestros hábitos de higiene), la presencia de flúor en la sal y la pasta de dientes que utilizamos. La herencia también juega un papel importante en la susceptibilidad de sus dientes a las caries.</p>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/6333641" allowfullscreen=""></iframe>
                </div>
            </div> 
        </div>
            </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 

<!-- gallery section -->
<section id="galeria" class="gallery section">
  <div class="container-fluid">
    <div class="section-header">
                <h2 class="wow fadeInDown animated">Galeria</h2>
                <p class="wow fadeInDown animated">10 años y muchas sonrisas alrededor del Perú nos respaldan como la primera y mejor Clínica Dental de Huancayo. ¡Compruébalo tu mismo!<br></p>
            </div>
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/01.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="images/portfolio/02.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="images/portfolio/03.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="images/portfolio/04.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption"> 
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="images/portfolio/05.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="images/portfolio/06.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="images/portfolio/07.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="images/portfolio/08.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- gallery section --> 
<!-- our team section -->
<section id="equipo" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Nuestro Equipo</h2>
                
            </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Henry Chavez Marin</h4>
            <h5 class="role">Odontologo</h5>
            <p>Especialista en Estetica Dental.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="https://www.facebook.com/hchavezmarin?lst=100002649100669%3A1211338656%3A1528233403"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      
    </div>
  </div>

</section>
 

<!-- Testimonials section -->
<section id="testimonios" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Expertise tiene un excelente servicio, me realice lentes de contacto dental y estoy fascinada con los cambios. Recomendado 100% y estoy muy feliz con ustedes."</h1>
                <p>Natalia parra</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Expertise es muy completo el servicio, buena atención al cliente.
El trabajo al ser tan profesional brinda seguridad y confianza." </h1>
                <p>Camilo Uribe</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"La calidad humana acompañada de un excelente servicio, hacen de la clínica Expertise el lugar indicado para cuidar mi sonrisa. 100% recomendado." </h1>
                <p>Juana Esteban</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Servicio de Primera Calidad, lo recomiendo 100% ..." </h1>
                <p>Fredy Alarcon</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 

<!-- Footer section -->
<footer class="footer">
<div class="container-fluid">
<div id="map-row" class="row">
    <div class="col-xs-12">    
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!4v1523315668564!6m8!1m7!1sIpybIMRaLnGMZ3juA0x6iw!2m2!1d-12.06084848202991!2d-75.20677117753768!3f0!4f0!5f1.1924812503605782"></iframe> 
      
          <div id="map-overlay" class="col-xs-5 col-xs-offset-6" style="">
            <h2 style="margin-top:0;color:#fff;">Contactos</h2>
            <address style="color:#fff;">
                <strong>Expertise</strong><br>
                Jr.Huancas 260<br>
                Huancayo, Junin<br>
                Peru<br>
                <abbr title="Phone">Cel:</abbr> 969611992
            </address>
              © 2018 Centro Odontologico Expertise.<a target="_blank"  title="Bootstrap Themes and HTML Templates">www.expertisedent.com</a>
        </div>
    </div>
     </div>
</div>
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.slider-banner').DrSlider({
                'transition': 'fade',
                showNavigation: false,
                progressColor: "#03A9F4"
            });
        });
    </script> 
</body>
</html>