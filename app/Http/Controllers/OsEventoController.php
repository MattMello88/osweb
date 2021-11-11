<?php

namespace App\Http\Controllers;

use App\Models\OsEvento;
use Illuminate\Http\Request;

class OsEventoController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data->ID_EVENTO = $request->ID_EVENTO;
      $data->DT_EVENTO = $request->DT_EVENTO;
      $data->DS_EVENTO = $request->DS_EVENTO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO = $request->ID_USUARIO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsEvento  $osEvento
     * @return \Illuminate\Http\Response
     */
    public function show(OsEvento $osEvento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsEvento  $osEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsEvento $osEvento)
    {
      $data->ID_EVENTO = $request->ID_EVENTO;
      $data->DT_EVENTO = $request->DT_EVENTO;
      $data->DS_EVENTO = $request->DS_EVENTO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO = $request->ID_USUARIO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsEvento  $osEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsEvento $osEvento)
    {
        //
    }
}
