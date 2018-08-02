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
    
    
    <link rel="stylesheet" type="text/css" href="/plugins/boostrap/css/bootstrap.css">
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
          <li><form method="POST" action="{{route('logout')}}">
                                        {{ csrf_field() }}
                    <button class="btn btn-dark btn-outline m-b-10 m-l-5"> Cerrar Sesion</button>
                    </form></li>

        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
     
</section>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand">
                        
                    </a>
                </div>
            
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Siepaddebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="{{ url('/dashboard/panel') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Panel de control <span class="label label-rouded label-primary pull-right">1</span></span></a>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Usuarios <span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/dashboard/usuarios') }}" >Listar Usuarios </a></li>
                                <li><a href="{{ url('/dashboard/registro') }}">Agregar Usuario </a></li>
                            </ul>
                        </li>
                        

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Citas <span class="label label-rouded label-primary pull-right">1</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/dashboard/calendario') }}">Calendario</a></li>
                                <li><a href="{{ url('/dashboard/citas') }}">Citas Registradas</a></li>
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Datos <span class="label label-rouded label-primary pull-right">1</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0);" onclick="cargarformulario(2);">Cargar Datos </a></li>
                                
                            </ul>
                        </li>


                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Reportes <span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0);" onclick="cargarformulario(3,1);">Reportes </a></li>
                                <li><a href="javascript:void(0);" onclick="cargarformulario(4,1);">Graficas </a></li>
                                
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary"></h4> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    </ol>
                </div>
            </div>
            

            

            
                
            
                
                @yield('content')

                                   
                    
                

                

                
            
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 Derechos Reservados.<a href="https://colorlib.com">Expertise</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript" src="/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="/plugins/fullcalendar/locale/es.js"></script>
    

    <!-- Amchart -->
     <script src="/js/lib/morris-chart/raphael-min.js"></script>
    <script src="/js/lib/morris-chart/morris.js"></script>
    <script src="/js/lib/morris-chart/dashboard1-init.js"></script>
    

    <script src="/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="/js/lib/calendar-2/pignose.init.js"></script>

    <script src="/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="/js/scripts.js"></script>



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
