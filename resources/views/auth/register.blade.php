@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="">
                <div class="">
                    <img src="https://www.imfacturacion.com/imfa/logo-ludoteca.png">
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-4 col-xs-offset-2">
                        <h3>Registrar </h3>
                        <p>Por favor ingrese todos los datos.</p>
                    </div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal form-login" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label sr-only">Usuario</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">Usuario</div>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label sr-only">Nombre</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">Nombre</div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('primerApellido') ? ' has-error' : '' }}">
                            <label for="primerApellido" class="col-md-4 control-label sr-only">Primer Apellido</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">Primer Apellido</div>
                                <input id="primerApellido" type="text" class="form-control" name="primerApellido" value="{{ old('primerApellido') }}">

                                @if ($errors->has('primerApellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primerApellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label sr-only">E-Mail</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">E-Mail</div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label sr-only">Contraseña</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">Contraseña</div>
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label sr-only">Confirmar Contraseña</label>

                            <div class="col-md-6 input-group">
                                <div class="input-group-addon">Confirmar Contraseña</div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
