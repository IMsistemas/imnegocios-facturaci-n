@extends('layouts.login')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-4 col-xs-offset-2">
            <img src="https://imfacturacion.com/imfa/logo-ludoteca.png">
        </div>
        <div class="col-md-8 col-md-offset-5 col-xs-offset-2">
            <img src="https://imfacturacion.com/imfa/user-name.png">
        </div>
        <div class="col-md-8 col-md-offset-4 col-xs-offset-2">
             <h3>INICIO DE SESIÓN</h3>
            <p>Por favor ingrese nombre de usuario y clave.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class=" ">
                {{--<div class="panel-heading">Login</div>--}}



                <div class="panel-body">
                    <form class="form-horizontal form-login" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label sr-only">Usuario</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input id="username" type="text" placeholder="Usuario" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label sr-only">Contraseña</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon"><i class="fa fa-unlock-alt"></i></div>
                                <input id="password" placeholder="Contraseña" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Autenticar
                                </button>

                                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidó su contraseña?</a>--}}


                                    <a class="btn btn-link" href="{{ url('/register') }}">Registrar</a>

                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
