<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{
    
    
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $application= Auth::user()->application;
       return view('applications.listaGeneral', compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications= Auth::user()->application;
        if ($applications != null){
            return redirect('/index')->with('solicitud','ok');
        }
        return view('applications.formularioSolicitud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre'=>'required',
            'curp' => 'required|max:18|min:18',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required|max:3',
            'telefono' => 'required|max:10',
            'sexo' => 'required',
            'limitacion' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required'
        ]);

        $solicitud = new Application(); //Se crea un objeto del modelo Application para poder guardaro en él
        $solicitud->nombre = $request->nombre;
        $solicitud->curp = $request->curp;
        $solicitud->user_id = Auth::id();
        $solicitud->direccion = $request->direccion;
        $solicitud->imf = $request->imf;
        $solicitud->edad = $request->edad;
        $solicitud->telefono = $request->telefono;
        $solicitud->sexo = $request->sexo;
        $solicitud->limitacion = $request->limitacion;
        $solicitud->escolaridad = $request->escolaridad;
        $solicitud->plantel = $request->plantel;
        $solicitud->etnia = $request->etnia;

        $solicitud->save();

        return redirect('/application')->with('crear','ok'); //Ruta a la que te envía una vez que se guardan los datos, en este caso es el index

        //$solicitud//Aquí se validan los datos y se guardan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('applications.datosPersonal', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('applications.formularioSolicitud', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $request-> validate([
            'nombre'=>'required',
            'curp' => 'required|max:18|min:18',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required|max:3',
            'telefono' => 'required|max:10',
            'sexo' => 'required',
            'limitacion' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required'
        ]);

        $application->nombre = $request->nombre;
        $application->curp = $request->curp;
        $application->direccion = $request->direccion;
        $application->imf = $request->imf;
        $application->edad = $request->edad;
        $application->telefono = $request->telefono;
        $application->sexo = $request->sexo;
        $application->limitacion = $request->limitacion;
        $application->escolaridad = $request->escolaridad;
        $application->plantel = $request->plantel;
        $application->etnia = $request->etnia;

        $application->save();

        return redirect('/application')->with('editar', 'ok'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect('/index')->with('eliminar', 'ok');
    }
}
