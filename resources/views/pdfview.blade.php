<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PDF</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>

        .table-bordered{
            border-color: black;
        }
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
            border-color: black;
        }
        .detail-table>tbody>tr>td, .detail-table>tbody>tr>th, .detail-table>tfoot>tr>td, .detail-table>tfoot>tr>th, .detail-table>thead>tr>td, .detail-table>thead>tr>th{
            vertical-align: middle;
            text-align: center;
        }
        #app-layout .row {
            margin-right: 0;
            margin-left: 0;
        }
        .detail-table>tr>td{

        }
    </style>
</head>
<body id="app-layout">

<div class="row">

    <div class="col-xs-6">
        <div style="height: 182px">
            <img src="https://www.imfacturacion.com/imfa/logo-ludoteca.png" class="img-responsive"/>
        </div>

        <div style="border: 1px solid black;height: 187px">
            <h4> LUDOTECA SCC</h4>
            <br>
            <span> LUDOTECA SCC</span>
            <br>

            <div class="row">
                <div class="col-xs-4">
                    Dirección Matriz:
                </div>
                <div class="col-xs-8">
                    AV SIMON BOLIVAR SN
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    Dirección Sucursal:
                </div>
                <div class="col-xs-8">
                    AV SIMON BOLIVAR SN
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    OBLIGADO A LLEVAR CONTABILIDAD
                </div>
                <div class="col-xs-4">
                    SI
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-6" style="border: 1px solid black; height: 370px">
        <h4>R.U.C.: 1792182654001</h4>

        <h3>FACTURA</h3>

        <div class="row">
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                FECHA Y HORA DE AUTORIZACIÓN
            </div>
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                07/10/2016 12:55:49.000
            </div>
        </div>

        <p><strong>No.</strong> 001-001-000000798</p>

        <p>NÚMERO DE AUTORIZACIÓN</p>

        <p>0710201612554917921826540011184871039</p>

        <div class="row">
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                <p>AMBIENTE</p>
            </div>
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                <p>PRODUCCION</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                <p>EMISION</p>
            </div>
            <div class="col-xs-6" style="padding-left: 0;padding-right: 0;">
                <p>NORMAL</p>
            </div>
        </div>
        <p>CLAVE DE ACCESO</p>

        <div>
            {{--<img src="http://imfa.es/imfa/barcode.png" class="img-responsive" height="50"/>--}}

            <table>
                <tr>
                    <td>
                        <img src='http://barcode.tec-it.com/barcode.ashx?data=0710201601179218265400120010010000007980000079919&code=Code128&dpi=96' />
                    </td>
                </tr>
            </table>

        </div>
        {{--<p>0710201601179218265400120010010000007980000079919</p>--}}
    </div>
    <br>
</div>
<br>

<div class="row" style="border: 1px solid black; margin-left: 15px;">
    <div class="row">
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>Razón Social / Nombres y Apellidos:</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>GUERRERO CRESPO VICTOR</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>Identificación:</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>0956790661</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>Fecha Emisión:</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>07/10/2016</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p>Guía Remisión:</p>
        </div>
        <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
            <p></p>
        </div>
    </div>
</div>
<br>

<div class="row" style="margin-left: 15px;">
    <table class="table table-bordered table-responsive table-condensed detail-table">
        <tr>
            <td>
                Cod. Principal
            </td>
            <td>
                Cod. Auxiliar
            </td>
            <td>Cant</td>
            <td>Descripción</td>
            <td>
                Detalle Adicional
            </td>
            <td>
                Detalle Adicional
            </td>
            <td>Detalle Adicional</td>
            <td>
                Precio Unitario
            </td>
            <td>
                Subsidio
            </td>
            <td>
                Precio Sin Subsidio
            </td>
            <td>
                Descuento
            </td>
            <td>
                Precio Total
            </td>
        </tr>
        <tr>
            <td>1001</td>
            <td></td>
            <td>1</td>
            <td>GASTO ADMINISTRATIVO</td>
            <td></td>
            <td></td>
            <td></td>
            <td>100</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0</td>
            <td>100</td>
        </tr>
    </table>
</div>
<br>

<div class="row">

    <div class="col-xs-8">
        <div style="border: 1px solid black;">
            <p>INFORMACION ADICIONAL</p>

            <div class="row">
                <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
                    <p>Direccion</p>
                </div>
                <div class="col-xs-9" style="padding-left: 0;padding-right: 0;">
                    <p>AV ALONSO DE TORRES Y CALLE BECK ROLLO</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
                    <p>Teléfono</p>
                </div>
                <div class="col-xs-9" style="padding-left: 0;padding-right: 0;">
                    <p>4503884</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
                    <p>Email</p>
                </div>
                <div class="col-xs-9" style="padding-left: 0;padding-right: 0;">
                    <p>usuario@dominio.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
                    <p>Alumno</p>
                </div>
                <div class="col-xs-9" style="padding-left: 0;padding-right: 0;">
                    <p>GUERRERO RATTO DANIEL</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="padding-left: 0;padding-right: 0;">
                    <p>BASICA</p>
                </div>
                <div class="col-xs-9" style="padding-left: 0;padding-right: 0;">
                    <p>2DO BASICA</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-4" >
        <div class="row">
            <table class="table table-bordered table-responsive table-condensed" >
                <tr>
                    <td>SUBTOTAL 14%</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>SUBTOTAL 0%</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>SUBTOTAL No Objeto de IVA</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>SUBTOTAL Exento de IVA</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>SUBTOTAL SIN IMPUESTOS</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>TOTAL Descuento</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>ICE</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>IVA 14%</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>IRBPNR</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>PROPINA</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>VALOR TOTAL</td>
                    <td>100</td>
                </tr>
            </table>
        </div>
        <div style="border: 1px solid black;">
            <div class="row" >
                <div class="col-xs-10">
                    VALOR TOTAL SIN SUBSIDIO
                </div>
                <div class="col-xs-2">0.00</div>
            </div>
            <div class="row" >
                <div class="col-xs-10">
                    AHORRO POR SUBSIDIO:
                    (Incluye IVA cuando corresponda)
                </div>
                <div class="col-xs-2">0.00</div>
            </div>
        </div>
    </div>

</div>

</body>
</html>