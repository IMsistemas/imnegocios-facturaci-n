@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>

                <div class="panel-body">
                <p> </p>

                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th> Cliente </th>
                                <th> Comprobante </th>
                                <th> Tipo documento </th>
                                <th> Fecha </th>
                                <th> Identificación </th>
                                <th> xml </th>
                                <th> pdf </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documentosCabeceraList as $docu)
                                <tr>
                                    <td>{{$docu->razonSocialCliente}} </td>
                                    <td> {{$docu->establecimientoCodigo}}-{{$docu->puntoEmisionCodigo}}-{{$docu->comprobante}} </td>
                                    <td>{{$docu->tipoDocumentoCodigo}} </td>
                                    <td>{{$docu->fechaAutorizo}} </td>
                                    <td>{{$docu->identificacionCliente}} </td>

                                    <td> <a href="{{ url('download/'.$docu->id.'') }}">xml</a>  </td>
                                    <td> <a href="{{ url('pdfview/'.$docu->id.'') }}">pdf</a>  </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

