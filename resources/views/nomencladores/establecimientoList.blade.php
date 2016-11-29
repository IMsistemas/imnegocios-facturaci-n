@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Establecimientos</div>

                <div class="panel-body">
                <p> </p>

                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th> Código </th>
                                <th> Descripción </th>
                                <th> Dirección </th>
                                <th> Habilitado </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($establecimientosList as $estab)
                                <tr>
                                    <td>{{$estab->codigo}} </td>
                                    <td>{{$estab->descripcion}} </td>
                                    <td>{{$estab->direccion}} </td>
                                    <td>{{$estab->habilitado}} </td>
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
