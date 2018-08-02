    @extends('accesos.principal')
    @section('content')
<?php $message=Session::get('message') ?>

                            @if($message == 'save')
                            <div class="alert alert-primary">
                            Usuario creado satisfactoriamente... puede iniciar sesion
                            </div>
                            @endif

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    @if (session()->has('flash'))
    
        <div class="alert alert-danger">{{ session('flash')}}</div>
    
    @endif
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Inicio de Sesion</h4>
                                <form method="POST" action="{{ route('cuenta') }}">

                                     {{ csrf_field() }}

                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" >
                                        <label for="email">Correo</label>
                                        <input type="email" class="form-control" placeholder="Ingrese su Correo" name="email">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}" >
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Ingrese su Contraseña" name="password">
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    
                                    <button class="btn btn-primary btn-flat m-b-30 m-t-30">Ingresar</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>No tiene una cuenta? <a href="register"> Registrate</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>

    @stop
    