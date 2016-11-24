<?php

namespace imfa\Http\Controllers\Documento;

use Illuminate\Http\Request;

use imfa\Http\Requests;
use imfa\Http\Controllers\Controller;
use imfa\Modelos\Documento\Cabecera;
use Illuminate\Contracts\Filesystem\Filesystem;

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

        echo ' -- estado: '. $xmls->estado ;
        echo ' -- numeroAutorizacion: '. $xmls->numeroAutorizacion;
        echo ' -- fechaAutorizacion: '. $xmls->fechaAutorizacion;
        $xmlCDATA = new \SimpleXMLElement($xmls->comprobante);

        $fecha_actual = date('Y-m-d');
        $date = new \DateTime($xmls->fechaAutorizacion);
        $fromateada = $date->format('Y-d-m H:i:s');



        dd($fromateada)   ;
        return  $date;

        //return 'holaaaa ftpfile';
    }
}
