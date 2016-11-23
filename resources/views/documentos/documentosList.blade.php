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
                                <th> puntoEmision </th>
                                <th> establecimiento </th>
                                <th> comprobante </th>
                                <th> tipoDocumento </th>
                                <th> identificacion </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documentosCabeceraList as $docu)
                                <tr>
                                    <td>{{$docu->puntoEmisionCodigo}} </td>
                                    <td>{{$docu->establecimientoCodigo}} </td>
                                    <td>{{$docu->comprobante}} </td>
                                    <td>{{$docu->tipoDocumentoCodigo}} </td>
                                    <td>{{$docu->identificacionCliente}} </td>
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

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>

@endsection
