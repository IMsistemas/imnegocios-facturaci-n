@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear establecimientos</div>

                <div class="panel-body">
                    {!! Form::open([ 'route' => 'establecimiento.store' , 'method' => 'POST'  ]) !!}
                        <div class="form-group">
                        {!! Form::label('Código')!!}
                        {!! Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'Ingresar código'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Descripción')!!}
                            {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Ingresar descripción'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Dirección')!!}
                            {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Ingresar Dirección'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Habilitado')!!}
                            {!! Form::checkbox('name', 'value')!!}
                        </div>

                        <button class="btn btn-default" type="submit">Enviar</button>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
