<?php

namespace imfa\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use imfa\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



    public function ftpfile(Filesystem $filesystem){
        // $filesystem->get('imfacturacion.com/public/facturaCDATA.xml') ;
        // $filesystem->get('imfacturacion.com/public/factura.xml') ;

        $xml = $filesystem->get('imfacturacion.com/public/facturaCDATA.xml') ;
        $xmls = new \SimpleXMLElement($xml);

        echo ' ---- $xml_object: '. $xmls->estado ;

        $xmlcomprobante = new \SimpleXMLElement($xmls->comprobante);
        echo ' $xmlcomprobante razonSocial: ' . $xmlcomprobante->infoTributaria->razonSocial;

        foreach ($xmlcomprobante->detalles->detalle as $detail) {
            echo ' __detalle precioTotalSinImpuesto = ', $detail->precioTotalSinImpuesto;
        }

        echo ' campoAdicional[0]: ' . $xmlcomprobante->infoAdicional->campoAdicional[0];

        dd($xmlcomprobante)   ;


        $factura = $filesystem->get('imfacturacion.com/public/factura.xml');
        $facturas = new \SimpleXMLElement($factura);

        echo '  _codigo documento: ' . $facturas->infoTributaria->codDoc . '  ';

        return  $facturas->infoTributaria->razonSocial;

        //return 'holaaaa ftpfile';
    }



}
