<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $applications = Application::get(); 
       return view('applications.listaGeneral', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'curp' => 'required',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'limitacion' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required'
        ]);

        $solicitud = new Application(); //Se crea un objeto del modelo Application para poder guardaro en él
        $solicitud->nombre = $request->nombre;
        $solicitud->curp = $request->curp;
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

        return redirect('/application'); //Ruta a la que te envía una vez que se guardan los datos, en este caso es el index

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
            'curp' => 'required',
            'direccion' => 'required',
            'imf' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
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

        return redirect('/application'); 
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
        return redirect('/application');
    }
}
