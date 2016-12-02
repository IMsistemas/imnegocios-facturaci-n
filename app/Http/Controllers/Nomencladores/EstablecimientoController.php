<?php

namespace imfa\Http\Controllers\Nomencladores;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use imfa\Http\Requests;
use imfa\Http\Controllers\Controller;
use imfa\Modelos\Nomencladores\Establecimiento;
use imfa\Modelos\Nomencladores\Schema;

class EstablecimientoController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Listado de establecimientos';

        $establecimientosList = Establecimiento::all();
        return view('nomencladores/establecimientoList')->with('establecimientosList',$establecimientosList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return 'formulario para crear establecimientos';
        return view('nomencladores/establecimiento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Input::All());
        $datas = request()->all();

        //Establecimiento::create($datas);

        $fecha_actual = date('Y-m-d');

        $schemasInstance = Schema::find(1);

        echo '$schemasInstance: ' . $schemasInstance->id ;

        $establecimiento= Establecimiento::all();


        Establecimiento::create([

            'codigo' => $datas['codigo'],
            'descripcion' => $datas['descripcion'],
            'direccion' => $datas['direccion'],
            'habilitado' => true ,
            'schemas_id' => $schemasInstance->id ,
        ])->save();

        return Redirect::to('establecimiento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'detalle del establecimiento: ' . $id;
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
}
