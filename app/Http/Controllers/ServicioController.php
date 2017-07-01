<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htpp\Request\ServicioController;

use App\Servicio;

use Redirect;

use Session;

class ServicioController extends Controller
{
    //
    public function __construct()
    {   
        // utiliza el middleware auth
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$servicios =  Servicio::all();
    	$datos = array ();
    	$contador = 0;

    	foreach ($servicios as $servicio) {
    		$datos[$contador]["id"] = $servicio->id);
			$datos[$contador]["nombre"] = $servicio->nombre;
			$datos[$contador]["descripcion"] = $servicio->descripcion;
			$datos[$contador]["precio"] = $ servicio->precio;
			$contador++;
    	}
    	return view("/home", compact('datos'));
}
public function store(ServicioRequest $request)
{
	if (Servicio::create($request->all()){
		Session::flash('message-sucess','El servicio se creo correctamente');
	} else {
		Session::flash('message-error','No se ha podido crear el servicio');
	}
	return Redirect::to('/servicios')
}