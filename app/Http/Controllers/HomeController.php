<?php

namespace imfa\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use imfa\Http\Requests;
use Illuminate\Support\Facades\DB;

use imfa\Modelos\Documento\Cabecera;
use imfa\Modelos\Documento\CabeceraDetalle;
use imfa\Modelos\Nomencladores\Cliente;
use imfa\Modelos\Nomencladores\TipoDocumento;

use Input;
use Validator;
use Redirect;
use Session;



use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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

    public function upXML()
    {
        return view('upfiles');
    }

    public function saveUpXml( Request $request ){

        // max_file_uploads = 1000 en php.ini
       // $file = $request->file('file');

        $files = $request->file('images');
        $file_count = count($files);
        $uploadcount = 0;


       foreach($files as $file) {
           $rules = array('file' => 'required|mimes:png,xml,Zip,zip,ZIP'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
           $validator = Validator::make(array('file'=> $file), $rules);


           if($validator->passes()){

               /*if( $file->getClientOriginalExtension() == 'zip'  ){
                    echo ' es valido como un: ' .  $file->getClientOriginalExtension();
               }*/


              //  $destinationPath = 'uploads';
                $filename = $file->getClientOriginalName();
              //  $upload_success = $file->move($destinationPath, $filename);

                Storage::disk('ftpUp')->put($filename,  \File::get($file));

                $uploadcount ++;
            }
        }

        if($uploadcount == $file_count){
            Session::flash('success', 'Carga exitosa!!');
            return Redirect::to('upXml');
        }
        else {
            Session::flash('message', 'Perdón, solo se permiten archivos xml y .zip!');
            return Redirect::to('upXml');
        }



       /* if( $file->getClientOriginalExtension() == 'XML' || $file->getClientOriginalExtension() == 'xml' ){
            $filename = $file->getClientOriginalName();
            Storage::disk('ftpUp')->put($filename,  \File::get($file));
            $uploadcount ++;
        }*/

        /*$nombre = $file->getClientOriginalName();
        Storage::disk('ftpUp')->put($nombre,  \File::get($file));*/

       // return redirect('/documentos');
    }


    public function downloads($id){
        $cabeceraInstance = Cabecera::find($id);
        $name = $cabeceraInstance->claveAcceso;
        $xml= $cabeceraInstance->xml ;
        header("Content-type: text/xml");
        header("Content-Disposition: attachment; filename= $name.xml ");
        echo $xml;

    }



    public function downPDF($id){
        $cabeceraInstance = Cabecera::find($id);
        $name = $cabeceraInstance->claveAcceso;

       $detalleCabecera = DB::table('cabecera_detalles')->where('cabeceras_id',  $cabeceraInstance->id )->get() ;
       $detalleAdicional = DB::table('documento_adicionals')->where('cabeceras_id',  $cabeceraInstance->id )->get() ;


        $getTipoEmisions = DB::table('tipo_emisions')->where('codigo',  $cabeceraInstance->tipoEmisionCodigo )->first();

        // id del esquema al que viene el xml a importado
        $getTipoAmbiente = DB::table('tipo_ambientes')->where('codigo',  $cabeceraInstance->tipoAmbienteCodigo )->first();

        $getschemas = DB::table('schemas')->where('id',  $cabeceraInstance->schemas_id )
                                            ->where('tipo_ambiente_id',  DB::table('tipo_ambientes')->where('codigo',  $cabeceraInstance->tipoAmbienteCodigo )->value('id') )->first();

        foreach( $detalleAdicional as $detallad ){
            if( $detallad->nombre == 'Direccion'  ){
                $direccion =  $detallad->descripcion ;
            }
            if( $detallad->nombre == 'Telefono'  ){
                $telefono =  $detallad->descripcion ;
            }
            if( $detallad->nombre == 'Email'  ){
                $email =  $detallad->descripcion ;
            }
            if( $detallad->nombre == 'Alumno'  ){
                $alumno =  $detallad->descripcion ;
            }
            if( $detallad->nombre == 'BASICA'  ){
                $basica =  $detallad->descripcion ;
            }
        }

        $data = [
            'ruc' => $getschemas->ruc ,
            'razonSocial' => $getschemas->razonSocial ,
            'direccionMatriz' => $getschemas->direccionMatriz ,

            'tipoAmbiente' => $getTipoAmbiente->descripcion ,
            'tipoEmisions' => $getTipoEmisions->descripcion  ,

            'razonSocialCliente'    => $cabeceraInstance->razonSocialCliente ,
            'autorizo'              => $cabeceraInstance->autorizo,
            'fechaAutorizo'         => $cabeceraInstance->fechaAutorizo,
            'fechaEmision'          => $cabeceraInstance->fechaEmision,
            'claveAcceso'           => $cabeceraInstance->claveAcceso,
            'comprobante'           => $cabeceraInstance->establecimientoCodigo .'-'. $cabeceraInstance->puntoEmisionCodigo .'-'.  str_pad( $cabeceraInstance->comprobante , 9, "0", STR_PAD_LEFT),
            'establecimientoDireccion' => $cabeceraInstance->establecimientoDireccion,
            'identificacionCliente' => $cabeceraInstance->identificacionCliente,

            // totales
            'valorTotal' => $cabeceraInstance->valorTotal,
            'valorBase' => $cabeceraInstance->valorBase,
            'descuentoTotal' => $cabeceraInstance->descuento ,

            'detalleCabecera' => $detalleCabecera,

            // adicional info
            'direccion' => $direccion,
            'telefono' => $telefono,
            'email' => $email,
            'alumno' => (isset($alumno)) ? $alumno : '' ,
            'basica' => (isset($basica)) ? $basica : '',
        ];

        $view =  \View::make('dompdfview', compact('data'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML( $view );

        // presentar en otra pestaña con dompdf
        return $pdf->stream( $name . '.pdf' )->header('Content-Type','application/pdf');

        // descargar directamente con dompdf
        //return $pdf->download( $name . '.pdf');

        /* Para descargar usando snappy
         $view =  \View::make('pdfview', compact('data'))->render();
         $pdf = App::make('snappy.pdf.wrapper');
         $pdf->loadHTML( $view );
         return $pdf->inline();*/
    }




    public function ftpfile(Filesystem $filesystem){
        // $filesystem->get('imfacturacion.com/public/facturaCDATA.xml') ;
        // $filesystem->get('imfacturacion.com/public/factura.xml') ;

        $desde = 'XML' ;
        $destino = 'XMLTMP' ;

        $filesxmls = $filesystem->files('XML') ;

        foreach( $filesxmls as $fils ){
           //  echo '$fils: ' . $fils ;

            $xmlx = $filesystem->get($fils) ;
            $xmlstmp = new \SimpleXMLElement($xmlx);
            $xmlcomprobantetmp = new \SimpleXMLElement($xmlstmp->comprobante);
            echo ' secuencial: ' . $xmlcomprobantetmp->infoTributaria->secuencial;


            try{
              //  $filesystem->delete($fils) ;
            }catch (FileNotFoundException $e ){
                echo ' FileNotFoundException ' . $e ;
            }

        }

        return 'holaaaa ftpfile';
    }


}
