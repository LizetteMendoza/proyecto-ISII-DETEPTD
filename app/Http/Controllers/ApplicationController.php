<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Limitation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{
    //se restringe en el contructor que solo el usuario autenticado puede hacer uso de los metodos de este controlador
    
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //El metodo muestra la vista de Estatus de tramite
    public function index()
    {
       $application= Auth::user()->application;
       //Application::with('user', 'limitations')->get();
       //return($application);
       return view('applications.listaGeneral', compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*El metodo valida que el usuario aun no tenga una solicitud creada y redirige a la solicitud de tramite*/
    public function create()
    {
        $limitations = Limitation::all();
        $applications= Auth::user()->application;
        if ($applications != null){
            return redirect('/index')->with('solicitud','ok');
        }
        return view('applications.formularioSolicitud', compact('limitations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*El metodo guarda los datos del formulario de solicitud y hace validaciones de cada campo*/
    public function store(Request $request)
    {
        $request-> validate([
            'nombre'=>'required',
            'curp' => 'required|max:18|min:18',
            'direccion' => 'required',
            'localidad' => 'required',
            'imf' => 'required|numeric',
            'edad' => 'required|max:3',
            'telefono' => 'required|max:10',
            'sexo' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required',
            'limitation_id' => 'required'
        ]);

        $request->merge(['user_id'=> Auth::id()]);

        $solicitud = Application::create($request->all());

        $solicitud->limitations()->attach($request->limitation_id);

        /*$solicitud = new Application(); //Se crea un objeto del modelo Application para poder guardaro en él
        $solicitud->nombre = $request->nombre;
        $solicitud->curp = $request->curp;
        $solicitud->user_id = Auth::id();
        $solicitud->direccion = $request->direccion;
        $solicitud->imf = $request->imf;
        $solicitud->edad = $request->edad;
        $solicitud->telefono = $request->telefono;
        $solicitud->sexo = $request->sexo;
        $solicitud->limitations()->attach($request->limitation_id);
        $solicitud->escolaridad = $request->escolaridad;
        $solicitud->plantel = $request->plantel;
        $solicitud->etnia = $request->etnia;

        $solicitud->save();*/

        return redirect('/application')->with('crear','ok'); //Ruta a la que te envía una vez que se guardan los datos, en este caso es el index

        //$solicitud//Aquí se validan los datos y se guardan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */

    /*Muestran el perfil del usuario*/
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

     /* El metodo es accedido desde el perfil del usuario en la opcion editar, redirige la formulario de edición*/
    public function edit(Application $application)
    {
        $limitations = Limitation::all();
        return view('applications.formularioEditar', compact('application', 'limitations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */

     /*Se editan los campos se validan y se actulizan en la aplicación*/
    public function update(Request $request, Application $application)
    {
        $request-> validate([
            'nombre'=>'required',
            'curp' => 'required|max:18|min:18',
            'direccion' => 'required',
            'localidad' => 'required',
            'imf' => 'required|numeric',
            'edad' => 'required|max:3',
            'telefono' => 'required|max:10',
            'sexo' => 'required',
            'escolaridad'=> 'required',
            'plantel'=> 'required',
            'etnia' => 'required',
            'limitation_id' => 'required'
        ]);

        Application::where('id', $application->id)->update($request->except(['_token', '_method', 'limitation_id']));

        $application->limitations()->sync($request->limitation_id);
        /*$application->nombre = $request->nombre;
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

        $application->save();*/


        return redirect('/application')->with('editar', 'ok'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    /*Se elimina la solicitud*/
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect('/index')->with('eliminar', 'ok');
    }
}
