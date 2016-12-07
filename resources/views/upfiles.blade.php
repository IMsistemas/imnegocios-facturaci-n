@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar XMLs</div>
                    <div class="panel-body">

                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h3>{!! Session::get('success') !!}</h3>
                            </div>
                        @endif



                            <div class="secure">Buscar archivos: </div>
                            {!! Form::open(array('url'=>'/saveUpXml','method'=>'POST', 'files'=>true)) !!}
                            <div class="control-group">
                                <div class="controls">

                                    {!! Form::file('images[]', array('multiple'=>true)) !!}

                                    <p class="errors">{!!$errors->first('images')!!}</p>
                                    @if(Session::has('message'))
                                        <p class="errors">{!! Session::get('message') !!}</p>
                                    @endif

                                </div>
                            </div>


                            {!! Form::submit('Aceptar', array('class'=>'btn btn-danger')) !!}
                            {!! Form::close() !!}

                      {{--<form method="POST" action="http://diamond-chaos.codio.io:3000/tuto/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">--}}
                        {{--<form class="form-horizontal form-login" role="form" method="POST" action="{{ url('/saveUpXml') }}"  accept-charset="UTF-8" enctype="multipart/form-data" >
                                {{ csrf_field() }}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nuevo Archivo</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file[]" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection