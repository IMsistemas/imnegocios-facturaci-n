<?php

namespace imfa\Http\Controllers\Documento;

use Illuminate\Http\Request;

use imfa\Http\Requests;
use imfa\Http\Controllers\Controller;
use imfa\Modelos\Documento\Cabecera;
use Illuminate\Contracts\Filesystem\Filesystem;
use imfa\Modelos\Documento\CabeceraDetalle;
use imfa\Modelos\Nomencladores\Cliente;
use imfa\Modelos\Nomencladores\TipoDocumento;

class CabeceraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $documentosList = Cabecera::all();
        return view('documentos/documentosList')->with('documentosCabeceraList', $documentosList );

        //return 'hola nuevo documento';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function cargaftp(Filesystem $filesystem){

        $xml = $filesystem->get('imfacturacion.com/public/facturaCDATA.xml') ;
        $xmls = new \SimpleXMLElement($xml);

        //echo ' -- estado: '. $xmls->estado ;
        //echo ' -- numeroAutorizacion: '. $xmls->numeroAutorizacion;
        //echo ' -- fechaAutorizacion: '. $xmls->fechaAutorizacion;
        $xmlCDATA = new \SimpleXMLElement($xmls->comprobante);

        $fecha_actual = date('Y-m-d');
        $date = new \DateTime($xmls->fechaAutorizacion);
        $fromateada = $date->format('Y-d-m H:i:s');

        // crear
        $tipoDocumentoInstance = TipoDocumento::find(1);
        $clienteInstance = Cliente::find(1);

        $cabeceraInstance = new Cabecera();

        $cabeceraInstance->autorizado = true ;
        $cabeceraInstance->autorizo = $xmls->numeroAutorizacion;
        $cabeceraInstance->fechaAutorizo = $fromateada;

        // ---- infoTributaria ----
        $cabeceraInstance->tipoAmbienteCodigo = $xmlCDATA->infoTributaria->ambiente ;           // nn
        $cabeceraInstance->tipoEmisionCodigo = $xmlCDATA->infoTributaria->tipoEmision ;
        $cabeceraInstance->razonSocialCliente =  $xmlCDATA->infoTributaria->razonSocial;        // nn
             // ruc  para verificar con schemas
        $cabeceraInstance->claveAcceso = $xmlCDATA->infoTributaria->claveAcceso  ;
        $cabeceraInstance->tipoDocumentoCodigo = $xmlCDATA->infoTributaria->codDoc   ;          // nn
        $cabeceraInstance->establecimientoCodigo = $xmlCDATA->infoTributaria->estab ;           // nn
        $cabeceraInstance->puntoEmisionCodigo = $xmlCDATA->infoTributaria->ptoEmi ;             // nn
        $cabeceraInstance->comprobante = $xmlCDATA->infoTributaria->secuencial ;                // nn
        $cabeceraInstance->establecimientoDireccion =  $xmlCDATA->infoTributaria->dirMatriz ;


        if( $xmlCDATA->infoTributaria->codDoc == '01' ){
            //echo 'es documento factura' ;
        }

        $cabeceraInstance->fechaEmision = $xmlCDATA->infoFactura->fechaEmision ;
        $cabeceraInstance->establecimientoDireccion =  $xmlCDATA->infoFactura->dirEstablecimiento ;
        // obligadoContabilidad
        $cabeceraInstance->tipoIdentificacionClienteCodigo = $xmlCDATA->infoFactura->tipoIdentificacionComprador ;
        $cabeceraInstance->razonSocialCliente = $xmlCDATA->infoFactura->razonSocialComprador ;
        $cabeceraInstance->identificacionCliente = $xmlCDATA->infoFactura->identificacionComprador ;
        $cabeceraInstance->valorBase =  $xmlCDATA->infoFactura->totalSinImpuestos ;
        $cabeceraInstance->descuento =  $xmlCDATA->infoFactura->totalDescuento ;
        $cabeceraInstance->valorTotal =  $xmlCDATA->infoFactura->importeTotal ;
        $cabeceraInstance->tipo_documento_id = $tipoDocumentoInstance->id;      // nn
        $cabeceraInstance->cliente_id = $clienteInstance->id  ;                // nn
        $cabeceraInstance->direccionCliente = 'direccion';                      // nn
       // tipo_ambientes
        $cabeceraInstance->tipo_ambiente_id = 1 ;                               // nn
        $cabeceraInstance->tipo_emision_id = 1;                              // nn
        $cabeceraInstance->seleccionado = true;
        $cabeceraInstance->save();



        //Detalles --- Facturas   --- verificar  if( $xmlCDATA->infoTributaria->codDoc == '01' )
        foreach ($xmlCDATA->detalles->detalle as $detail) {
            $cabeceraDetalleInstance = new CabeceraDetalle();
            $cabeceraDetalleInstance->codigoProducto = $detail->codigoPrincipal ;
            $cabeceraDetalleInstance->descripcion = $detail->descripcion ;
            $cabeceraDetalleInstance->cantidad = $detail->cantidad ;
            $cabeceraDetalleInstance->precio = $detail->precioUnitario;
            $cabeceraDetalleInstance->descuento = $detail->descuento;
            $cabeceraDetalleInstance->valorBase = $detail->precioTotalSinImpuesto;
            $cabeceraDetalleInstance->cabeceras_id = $cabeceraInstance->id ;
            $cabeceraDetalleInstance->save();
        }


       // dd($fromateada);
      //  return  $date;
        //return 'holaaaa ftpfile';
        return redirect('/documentos');
    }
}
