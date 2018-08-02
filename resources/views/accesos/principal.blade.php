<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
    <title>xpertise | Centro Odontologico</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/boostrap/css/bootstrap.css">
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-icon.css">
    <link rel="stylesheet" href="css/animate.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>



<body class="fix-header fix-sidebar">
    <section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" ><span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
         <li><a href="{{ url('/#inicio') }}">Inicio</a></li>
          <li><a href="{{ url('/#tratamientos') }}">Tratamientos</a></li>
          <li><a href="{{ url('/#nosotros') }}">Nosotros</a></li> 
          <li><a href="{{ url('/#galeria') }}">Galeria</a></li>
          <li><a href="{{ url('/#equipo') }}">Equipo</a></li>
          <li><a href="{{ url('/#testimonios') }}">Testimonios</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
     
</section>


@yield('content')


<script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>


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
