<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serv_cliente = ServicioCliente::all();
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
        $servicioCliente = ServicioCliente::find($id); // se busca la pelicula 

        // se retorna la vista  y los datos
        return view('editCliServicio', compact('servicioCliente'));
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
         $servicioCliente = ServicioCliente::find($id); // se busca la pelicula

        if ($servicioCliente->delete()) {  // se elimina
            Session::flash('message-success','Se Cancelo exitosamente la cita');
        } else {
           Session::flash('message-error','No se ha podido cancelar la cita');
        }
        return Redirect::to('/servicios');
    }
}
