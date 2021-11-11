<?php

namespace App\Http\Controllers;

use App\Models\OsInterrupcao;
use Illuminate\Http\Request;

class OsInterrupcaoController extends Controller
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
      $data->ID_INTERRUPCAO = $request->ID_INTERRUPCAO;
      $data->DT_INTERRUPCAO = $request->DT_INTERRUPCAO;
      $data->DT_REINICIO = $request->DT_REINICIO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function show(OsInterrupcao $osInterrupcao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsInterrupcao $osInterrupcao)
    {
      $data->ID_INTERRUPCAO = $request->ID_INTERRUPCAO;
      $data->DT_INTERRUPCAO = $request->DT_INTERRUPCAO;
      $data->DT_REINICIO = $request->DT_REINICIO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsInterrupcao $osInterrupcao)
    {
        //
    }
}
