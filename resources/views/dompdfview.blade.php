<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> {{ $data['claveAcceso'] }} </title>

    <style type="text/css">

        @page { margin: 20px; }

        body{
            font-family: sans-serif;
        }

        #div_superior{
            width: 100%;
            position: relative;
            height: 400px;
        }

        #div_inferior{
            width: 100%;
            position: relative;
            /*height: 420px;*/
            /*margin-top: 0px;*/
        }

        .left {
            /*padding-left: 10px;*/
            /*padding-top: 10px;*/
            /*margin-left: 57px;*/
            float: left;
            position: relative;
            width: 50%;
            /*border: steelblue solid 1px;*/
            height: auto;
            font-size: 11px;

        }

        .left_bottom {
            padding-left: 10px;
            padding-top: 10px;
            /*margin-left: 57px;
            float: left;
            position: relative;*/
            margin-top: 80px;
            width: 100%;
            border: black solid 1px;
            height: auto;
            border-radius: 10px;
        }

        .right {
            padding-top: 10px;
            padding-left: 10px;
            margin-right: 10px;
            position: relative;
            float: right;
            width: 46%;
            border: black solid 1px;
            height: auto;
            border-radius: 10px;
        }

        .middle_first{
            border: black solid 1px;
            width: 100%;
            position: relative;
            font-size: 11px;
        }

        .middle_third{
            float: left;
            position: relative;
            width: 55%;
            border: black solid 1px;
            height: 125px;
            padding-top: 0px;
            padding-left: 10px;

        }

        .middle_second{
            float: right;
            position: absolute;
            width: 40%;
            /*border: black solid 1px;*/
            height: auto;
            padding-top: 10px;
            padding-left: 10px;
        }


    </style>

</head>
<body>

<div class="container-body">
    <div id="div_superior">
        <div class="left">
            <div style="margin-top: 5px;">
                <img src="http://imfa.es/imfa/logo-ludoteca.png" style="width: 60%; height: 35%; margin-left:40px ;"/>
            </div>

            <div class="left_bottom" >
                <div style="font-size: 14px; font-weight: bold;"><span> {{ $data['razonSocial']  }} </span></div>

                <div style="font-size: 12px; margin-top: 5px;">
                    <table style="width: 100%" border="0">
                        <tr>
                            <td style="width: 40%; font-weight: bold;">Nombre Comercial:</td>
                            <td> {{ $data['razonSocial']  }} </td>
                        </tr>
                    </table>
                </div>

                <div style="font-size: 12px; margin-top: 5px;">
                    <table style="width: 100%" border="0">
                        <tr>
                            <td style="width: 40%; font-weight: bold;">Dirección Matriz:</td>
                            <td>  {{ $data['direccionMatriz']  }} </td>
                        </tr>
                    </table>
                </div>

                <div style="font-size: 12px; margin-top: 5px;">
                    <span> </span>
                    <table style="width: 100%" border="0">
                        <tr>
                            <td style="width: 40%; font-weight: bold;">Dirección Sucursal:</td>
                            <td>  {{ $data['direccionMatriz']  }} </td>
                        </tr>
                    </table>
                </div>

                <div style="font-size: 11px; margin-top: 10px; font-weight: bold;"><span>CONTRIBUYENTE ESPECIAL:  </span></div>

                <div style="font-size: 11px; margin-top: 10px; font-weight: bold;"><span>OBLIGADO A LLEVAR CONTABILIDAD: </span>  Si</div>

            </div>
        </div>

        <div class="right">
            <div style="font-size: 16px;"><span style="font-weight: bold;">R.U.C.:</span>   {{ $data['ruc']  }} </div>

            <div style="font-size: 20px; margin-top: 15px; font-weight: bold;"><span>FACTURA</span></div>

            <div style="font-size: 14px; margin-top: 15px;"><span style="font-weight: bold;">No.:</span> {{ $data['comprobante'] }} </div>

            <div style="font-size: 16px; margin-top: 15px;"><span>NUMERO DE AUTORIZACION</span></div>

            <div style="font-size: 14px; font-weight: bold;"><span> {{ $data['autorizo'] }} </span></div>

            <div style="font-size: 14px; margin-top: 15px;">
                <table style="width: 100%" border="0">
                    <tr>
                        <td style="width: 42%;">FECHA Y HORA DE AUTORIZACION:</td>
                        <td>  {{$data['fechaAutorizo']}} 12:55:49 </td>
                    </tr>
                </table>
            </div>

            <div style="font-size: 14px; margin-top: 15px;"><span style="font-weight: bold;">AMBIENTE:</span> {{ $data['tipoAmbiente']  }} </div>

            <div style="font-size: 14px; margin-top: 15px;"><span style="font-weight: bold;">EMISION:</span> {{ $data['tipoEmisions']  }} </div>

            <div style="font-size: 16px; margin-top: 15px;"><span>CLAVE DE ACCESO</span></div>

            <div style="font-size: 9px; margin-top: 5px; "><span> <img style="height: 65px;" src='http://barcode.tec-it.com/barcode.ashx?data={{ $data['claveAcceso'] }}' /> </span></div>

            {{--<div style="font-size: 12px; margin-top: 5px;"><span> 12345622222224355322344332343222222455 </span></div>--}}
        </div>
    </div>

    <div class="middle_first" style="padding: 5px; margin-top: -20px;">
        <table border="0" style="width: 100%; font-size: 10px;">
            <tr>
                <td style="width: 20%; font-weight: bold;">Razón Social / Nombres y Apellidos:</td>
                <td> {{$data['razonSocialCliente']}} </td>
                <td style="width: 15%; font-weight: bold;">Identificación:</td>
                <td style="width: 15%;"> {{$data['identificacionCliente']}} </td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Fecha de Emisión:</td>
                <td > {{$data['fechaEmision']}} </td>
                <td style="font-weight: bold;">Guía Remisión:</td>
                <td > </td>
            </tr>
        </table>
    </div>

    <div class="" style="margin-top: 10px; font-size: 11px; text-align: center;">
        <table border="1" cellpadding="0" cellspacing="0" style="width: 100%; text-align: center;">
            <thead>
            <tr>
                <th>Cod. Principal</th>
                <th>Cod. Auxiliar</th>
                <th>Cant.</th>
                <th>Descripcion</th>
                <th> Detalle Adicional</th>
                <th> Detalle Adicional</th>
                <th> Detalle Adicional</th>
                <th>Precio Unitario</th>
                <th>Subsidio</th>
                <th>Precio Sin Subsidio</th>
                <th>Descuento</th>
                <th>Precio Total</th>
            </tr>
            </thead>
            <tbody style="font-size: 10px;">
            @foreach(  $data['detalleCabecera'] as $dc  )
                <tr>
                    <td>    {{ $dc->codigoProducto }} </td>
                    <td></td>
                    <td> {{ $dc->cantidad }} </td>
                    <td>  {{ $dc->descripcion }} </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> {{ $dc->precio }} </td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td> {{ $dc->descuento }} </td>
                    <td> {{ $dc->precio }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <div id="div_inferior">
        <div class="middle_third" style="margin-top: 10px;">
            <div style="width: 100%;">
                <table style="width: 100%;" border="0">
                    <tr>
                        <td><span style="font-weight: bold; font-size: 12px;">Información Adicional </span></td>
                       {{-- <td><span style="font-size: 10px; text-align: right; float: right;">No. Pedido: {token_no_entrega}</span></td>
                        <td><span style="font-size: 10px; text-align: right; float: right;">{token_vendedor}</span></td>--}}
                    </tr>
                </table>
            </div>

            <div style="width: 100%; margin-top:5px;">
                <table style="width: 100%; font-size: 10px;" border="0">
                    <tr>
                        <td style="width: 30%;">Teléfono:</td>
                        <td style="font-weight: bold;"> {{ $data['telefono']  }} </td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Email del Cliente:</td>
                        <td>  {{ $data['email']  }} </td>
                    </tr>

                    <tr>
                        <td style="width: 30%;">Alumno:</td>
                        <td> {{ $data['alumno']  }} </td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">  BÁSICA  :</td>
                        <td> {{ $data['basica']  }} </td>
                    </tr>
                </table>
            </div>

            <div style="width: 100%; margin-top:45px;">
                <table style="width: 100%; font-size: 10px;" border="1" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Forma de Pago</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 30%;">  </td>
                            <td style="width: 30%;">  </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="middle_second" style="">
            <table style="width: 100%; font-size: 11px;" border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 60%; font-weight: bold;">SUBTOTAL:</td>
                    <td style="text-align: right;"> {{ $data['valorBase'] }} </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">SUBTOTAL 0%:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">SUBTOTAL NO OBJ IVA:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">SUBTOTAL EXENTO IVA:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">SUBTOTAL SIN IMPUESTO:</td>
                    <td style="text-align: right;"> {{ $data['descuentoTotal'] }} </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">DESCUENTO:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">ICE:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">IVA:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">IRBPNR:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">PROPINA:</td>
                    <td style="text-align: right;"> 0.00 </td>
                </tr>
                <tr>
                    <td style="width: 60%; font-weight: bold;">VALOR A PAGAR:</td>
                    <td style="text-align: right;"> {{ $data['valorTotal'] }} </td>
                </tr>
            </table>
        </div>

    </div>




</div>
</body>
</html>