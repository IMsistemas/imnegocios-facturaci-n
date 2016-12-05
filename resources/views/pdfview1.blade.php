
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> pdf </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>

        #itemscomprobante.table>thead>tr>th{border-bottom:1px solid #d2d9dd;border-top:1px solid #d2d9dd;background-color:#f5f7f9}@media(max-width:767px){#itemscomprobante.table>thead>tr>th{border-top:0}}.amount{text-align:right}.amount input[type=text]{text-align:right}#itemscomprobante .price-with-subsidy{display:none}#itemscomprobante.display-subsidy .price-with-subsidy{display:table-cell}
        #detallecomprobante td.product-info,#detallecomprobante td.infonumeric{padding-top:15px;font-size:14px}#detallecomprobante td.product-name{width:25%}#detallecomprobante td.product-code{width:150px}#detallecomprobante td.infonumeric{font-family:monospace}td.actions{padding-top:12px;text-align:center}td.atright2{text-align:right}.btn-item-plus{position:absolute;left:-23px;top:-7px}.btn-item-sub{position:absolute;left:-23px;top:23px}#itemscomprobante,#itemscomprobante input{font-size:14px}#itemscomprobante input{margin:0}#resumencomprobante .total,.totals .total{font-family:'Avenir LT W01_65 Medium',"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:23.36px}.table>tbody#resumencomprobante>tr>td{border-color:transparent;padding-top:8px;padding-bottom:8px}.table>tbody#resumencomprobante>tr.total>td{border-color:#f5f7f9;padding-top:19.2px;padding-bottom:19.2px;border-bottom:1px solid #f5f7f9}td.resumenheader{text-align:center;font-weight:bold}.tooltipable img{margin-top:-6px}.modal-dialog .panelbody{font-size:18px;padding-top:5px}.estadocomprobante{font-size:10px;padding:4px 5px}table.table-striped tbody tr.error td{background:#fff1f1}table.table-striped tbody tr.error td a.viewlnk{color:black}table.table-striped tbody tr.error:hover td{background:#ffe8e8}.adicionalinfo{font-size:13px;color:#666}.icon-large:before{font-size:30px}#integracion table tr td{vertical-align:top;padding-bottom:20px}#integracion img{width:80px}.apikey{background:white;border:solid 1px #ccc;padding:10px;color:green}table.configuracionform td,table.configuracionform th{border-top:0;padding:3px}.mensajesalerta{margin-bottom:5px}.h404{font-size:230px;line-height:230px}input.input-small-fecha{width:110px}input.error{border:solid 2px red}.accordion-toggle{color:black}.emailandurls{text-transform:lowercase}h6{font-size:15px;margin:0;margin-top:10px;padding:3px 10px;background:#555;color:white}.nomargins{margin:0}td.check-comprobante{padding:8px 4px}.progress-process{width:100%;margin:10px 0}#formlogin{background:#fafafa;padding:25px}ul.messages{list-style:none;margin:0}div.alert p:last-child{margin-bottom:0}.dropdown-menu.datepicker{background:#eee}.dropdown-submenu{position:relative}.dropdown-submenu>.dropdown-menu{top:0;left:-100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px}@media(max-width:767px){.dropdown-submenu>.dropdown-menu{left:50%}}.dropdown-submenu:hover>.dropdown-menu{display:block}.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#ccc;margin-top:5px;margin-right:-10px}.dropdown-submenu:hover>a:after{border-left-color:#fff}.dropdown-submenu.pull-left{float:none}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px}.inner-menu{margin-bottom:20px}.inner-menu .toolbar{text-align:right}.inner-menu .toolbar>*{margin-left:10px}.section-toolbar{border-bottom:1px solid #d2d9dd}.section-toolbar>div{margin-top:0;margin-bottom:20px}.section-toolbar .form-search input[type=text].input-sm{border-radius:15.75px}.section-toolbar .form-search.active{max-width:320px}.section-toolbar .form-search.active input[type=text].input-sm{border-top-left-radius:15.75px;border-bottom-left-radius:15.75px;border-top-right-radius:0;border-bottom-right-radius:0;border-right-width:0}.section-toolbar .form-inline{float:left;margin-left:5px}.navbar{font-size:14px}.info-entry{margin-bottom:8px}span.info-label{display:block;font-size:14px}.btn-group .dropdown-toggle.btn-default ~ .dropdown-menu{background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15)}.comprobante .receptor-id{display:block}.comprobante h4{margin-top:35px}.comprobante{padding-top:15px}@media(max-width:767px){.comprobante{padding-top:0}}
        #itemscomprobante.table{border-bottom:1px solid #d2d9dd}#itemscomprobante.table.lista>thead>tr>th,#itemscomprobante.table>tbody>tr>th,#itemscomprobante.table>tfoot>tr>th,#itemscomprobante.table>thead>tr>td,#itemscomprobante.table>tbody>tr>td,#itemscomprobante.table>tfoot>tr>td{padding:24px 16px}
        #payment-methods,.payments{border-top:1px solid #d2d9dd;margin-bottom:60px}.payments-totals .total{font-family:'Avenir LT W01_65 Medium',"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16.6px;margin-bottom:10px;text-align:right}.payment-methods-section{padding:30px 0;border-bottom:1px solid #d2d9dd}.payment-methods-section .form-group{margin-bottom:0}.payment-methods-section .payment-methods-section-title{margin-top:0}.payment-methods-section .payment-methods-opt-fields{padding:10px 0}.payment-methods-section .payment-methods-opt-fields.out{height:0;padding:0}.payment-methods-section .payment-methods-opt-fields.in{height:auto;overflow:visible}.payment-methods-section .switch-label{width:180px}.payment-terms-section{transition:all .2s ease-in}.payment-terms-section>.checkbox span{font-size:16.6px}.payments-header:before,.payments-header:after{content:" ";display:table}.payments-header:after{clear:both}.payments-header:before,.payments-header:after{content:" ";display:table}.payments-header:after{clear:both}.payments-header h4{float:left}
        .totals-summary-header{text-align:center;margin:20px 0;padding:15px;background-color:#fff;border-bottom:1px solid #d2d9dd;color:#333}.totals-summary-header .totals-summary-item{padding:10px 0}.totals-summary-header .totals-summary-item .totals-summary-amount{font-size:1.5em;font-family:'Avenir LT W01_85 Heavy',"Helvetica Neue",Helvetica,Arial,sans-serif}.totals-summary-header .totals-summary-item .totals-summary-caption{font-size:14.6px;font-family:'Avenir LT W01_65 Medium',"Helvetica Neue",Helvetica,Arial,sans-serif;color:#777;text-transform:uppercase}.totals-summary-header .totals-summary-item .totals-summary-description{padding:10px;position:fixed;background:#414852;border-radius:4px;font-size:.75em;color:#fff;max-width:200px;z-index:100;text-transform:none;font-family:'Avenir LT W01_35 Light',"Helvetica Neue",Helvetica,Arial,sans-serif}

        #app-layout .row{
            margin-right: 0;
            margin-left: 0;
        }


        .right {
            text-align: right;
        }
        .items {
            font-size: 15px;
        }

        /* Large desktops and laptops */
        @media (min-width: 1200px) {
            .document-header {
                float: right;
            }
        }

        /* Portrait tablets and medium desktops */
        @media (min-width: 992px) and (max-width: 1199px) {
            .document-header {
                float: right;
            }
        }

        /* Portrait tablets and small desktops */
        @media (min-width: 768px) and (max-width: 991px) {

        }

        /* Landscape phones and portrait tablets */
        @media (max-width: 767px) {
            .header {
                display: block;
                margin: 0 auto 10px;
                padding-top: 5px;
                font-size: 20px;
                text-align: center;
            }
            h4.header {
                font-size: 16px;
            }
        }

        /* Landscape phones and smaller */
        @media (max-width: 480px) {
            .header {
                /*display: table;
                margin: 0 auto;*/
                padding-top: 5px;
            }
            .info-entry .col-sm-6 {
                overflow: hidden;
                text-overflow: ellipsis;
            }
            p {
                line-height: 1.6;
            }
        }

        table.info-adicional td {
            padding: 4px 10px;
        }
    </style>
</head>
<body id="app-layout">

<div class="row comprobante">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">

                <div class="receipt-logo">
                    <img src="http://imfa.es/imfa/logo-ludoteca.png" id="issuer_logo" class="header"/>
                </div>

            </div>
            <div class="col-md-6">
                <div class="document-header">
                    <h3 style="line-height: 1; margin-top:0;" class="header">Factura 001-002-000053047</h3>
                    <h4 class="header">Oct 22, 2016</h4>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">

                <h4 id="issuer_name">NIC.EC</h4>

                <div>
                    NICEC S.A.
                </div>

                <div>
                    RUC
                    0992135549001
                </div>
                <div>
                    <a href="mailto:pagos@nic.ec">pagos@nic.ec</a>
                </div>


                <div>
                    Obligado a llevar contabilidad<br/>
                </div>


                <div class="row hide">
                    <div class="col-sm-2">
                        Dir. Matriz:
                    </div>
                    <div class="col-sm-10">
                        Av. Francisco de Orellana No, 234 Edif Blue Towers piso 9 oficina # 902 y 903.
                    </div>
                </div>

                <div class="row hide">
                    <div class="col-sm-2">
                        Teléfono:
                    </div>
                    <div class="col-sm-10">
                        +593 (4) 3729560
                    </div>
                </div>

                <div class="row" style="padding-top: 25px;">
                    <div class="col-sm-2">
                        Dirección:
                    </div>
                    <div class="col-sm-10">
                        <p>Av Francisco de Orellana No, 234 Edif Blue Towers piso 9 oficina # 902 y 903.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        Teléfono:
                    </div>
                    <div class="col-sm-10">
                        (593-4) 3729560
                    </div>
                </div>

            </div>
            <hr class="hidden-md hidden-lg">
            <div class="col-md-6">
                <h4>Autorización</h4>

                <div class="row info-entry">
                    <div class="col-md-3 col-sm-6">
                        <span>N&uacute;mero:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        2210201601204709921355490010000530474
                    </div>
                </div>
                <div class="row info-entry">
                    <div class="col-md-3 col-sm-3">
                        <span>Fecha:</span>
                    </div>
                    <div class="col-md-9 col-sm-6 col-sm-6">

                        Oct. 22, 2016, 1:49 a.m.

                    </div>
                </div>
                <div class="row info-entry">
                    <div class="col-md-3 col-sm-6">
                        <span>Clave de acceso:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        2210201601099213554900120010020000530471994157715
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <h4 id="customer_name">IMPACTMEDIA CIA. LTDA.</h4>

                <p>
                    RUC 1792338646001<br/>

                    luis.imnegocios@gmail.com<br/>


                    Av. Diego de Almagro N32-27 y Whymper (esquina), edificio Torres Whymper, piso 11, oficina 1103<br/>


                    Tel. 593-2557541<br/>

                </p>
            </div>
            <div class="col-md-6">


            </div>
        </div>
        <hr/>
        <div class="table-responsive">
            <table class="table items">
                <thead>
                <tr>
                    <th class="hidden-xs hidden-sm">C&oacute;digo</th>
                    <th>Descripción</th>
                    <th class="right">Cantidad</th>
                    <th class="right">Precio Unitario</th>

                    <th class="right">Descuento</th>
                    <th class="right">Subtotal</th>
                    <th class="right visible-lg">ICE</th>
                    <th class="right visible-lg">IVA</th>
                    <th class="right visible-lg">Total</th>

                </tr>
                </thead>
                <tbody id='detallecomprobante'>

                <tr id='item_0'>
                    <td class="hidden-xs hidden-sm">1</td>
                    <td class="">
                        <p>Renewal of aqua.ec for 1 year</p>

                    </td>
                    <td class="right">
                        1
                    </td>
                    <td class="right">$35.00</td>

                    <td class="right">
                        $0.00
                    </td>
                    <td class="right" id="valor_0">
                        $35.00
                    </td>
                    <td class="right visible-lg" id="valorice_0">
                        $0.00
                    </td>
                    <td class="right visible-lg" id="valoriva_0">
                        $4.90
                    </td>
                    <td class="right visible-lg" id="valort_0">
                        $39.90
                    </td>

                </tr>

                </tbody>

            </table>
        </div>
    </div>
</div>

<div class='row'>
    <div class="col-md-5">

    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <table class="table items">
            <tbody id="resumencomprobante">

            <tr>
                <td class="" width="50%">Subtotal sin impuestos</td>
                <td class="right" id='id_subtotalsinimpuestos'>$35.00</td>
            </tr>


            <tr>
                <td class="" width="50%">Subtotal IVA 14%</td>
                <td class="right" id='id_subtotal'>$35.00</td>
            </tr>


            <tr>
                <td class="" width="50%">Total descuento</td>
                <td class="right" id='id_totaldescuento'>$0.00</td>
            </tr>


            <tr>
                <td class="" width="50%">Valor IVA 14%</td>
                <td class="right" id='id_totaliva'>$4.90</td>
            </tr>


            <tr>
                <td class="total" width="50%">
                    Total
                </td>
                <td class="total right" id='id_total'>
                    $39.90
                </td>
            </tr>

            </tbody>
        </table>


    </div>
</div>


<div id="historial_pagos">


    <div class="row">
        <div class="col-md-12">
            <div class="totals-summary-header payments">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="totals-summary-item">
                            <div class="totals-summary-amount" id="id_saldo_actual">
                                $0.00
                            </div>
                            <div class="totals-summary-caption">
                                Saldo pendiente
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="totals-summary-item">
                            <div class="totals-summary-amount">
                                $39.90
                            </div>
                            <div class="totals-summary-caption">
                                Total pagado
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <h4>Pagos</h4>

            <div class="payments">
                <div class="payment-methods-section">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>M&eacute;todo de Pago</th>
                            <th>Notas</th>
                            <th class="right">Monto</th>
                            <!--th>Saldo</th-->

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Oct. 22, 2016, 1:49 a.m.</td>
                            <td>Tarjeta de crédito</td>
                            <td id="notas-pago"></td>
                            <td class="right">$39.90</td>
                            <!--td></td-->

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="row">
    <div class="col-md-12">

        <h4>Informaci&oacute;n adicional </h4>

        <div class="table-responsive">
            <div class="">
                <table class="info-adicional items" style="">
                    <tbody>
                    <input type='hidden' id='id_adicionaless' name='id_adicionales'/>

                    <tr>
                        <th>Teléfono:</th>
                        <td>593-2557541</td>
                    </tr>

                    <tr>
                        <th>Dirección:</th>
                        <td>Av. Diego de Almagro N32-27 y Whymper (esquina), edificio Torres Whymper, piso 11, oficina
                            1103
                        </td>
                    </tr>

                    <tr>
                        <th>Ciudad, Provincia:</th>
                        <td>Quito, Pichincha</td>
                    </tr>

                    <tr>
                        <th>País:</th>
                        <td>Ecuador</td>
                    </tr>

                    <tr>
                        <th>Código:</th>
                        <td>42204</td>
                    </tr>

                    <tr>
                        <th>For payments with credit card:</th>
                        <td>www.nic.ec/payments</td>
                    </tr>

                    <tr>
                        <th>Para pagos con tarjeta de crédito:</th>
                        <td>www.nic.ec/pagos</td>
                    </tr>

                    <tr>
                        <th>Nombre:</th>
                        <td>Luis Antonio Vinueza Velastegui</td>
                    </tr>

                    <tr>
                        <th>Email:</th>
                        <td>luis.imnegocios@gmail.com</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>