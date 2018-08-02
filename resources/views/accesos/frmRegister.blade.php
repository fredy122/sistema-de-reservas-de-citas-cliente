 @extends('accesos.principal')
    @section('content')
<script src='https://www.google.com/recaptcha/api.js'></script>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Registro</h4>
                                <form  method="POST" action="/save">

                                    {{ csrf_field() }}

                                    <div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
                                        <label>Nombre de Usuario</label>
                                        <input type="nombre" class="form-control" placeholder="Ingrese su Nombre" name="Nombre">
                                        {!! $errors->first('Nombre', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
                                        <label>Correo</label>
                                        <input type="email" class="form-control" placeholder="Ingrese su Correo" name="Email">
                                        {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                                    </div>

                                    

                                    <div class="form-group {{ $errors->has('Contraseña') ? 'has-error' : ''}}">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Ingrese su Contraseña" name="Contraseña">
                                        {!! $errors->first('Contraseña', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div name="g-recaptcha" class="g-recaptcha"  data-sitekey="6Lfcs2IUAAAAALBNMF_1HzIhyu80Fsc81RVp5poF">
                                    </div>

                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox"> Acepta los términos y la política
                                    </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Guardar">Registrar</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Ya tiene una cuenta? <a href="login"> Inicia sesion</a></p>
                                       
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
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

</body>

@stop
   