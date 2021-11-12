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
      return OsInterrupcao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsInterrupcao;
      $data->ID_INTERRUPCAO = $request->ID_INTERRUPCAO;
      $data->DT_INTERRUPCAO = $request->DT_INTERRUPCAO;
      $data->DT_REINICIO = $request->DT_REINICIO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function show(OsInterrupcao $osInterrupcao)
    {
      return $osInterrupcao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsInterrupcao $data)
    {
      $data->ID_INTERRUPCAO = $request->ID_INTERRUPCAO;
      $data->DT_INTERRUPCAO = $request->DT_INTERRUPCAO;
      $data->DT_REINICIO = $request->DT_REINICIO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsInterrupcao  $osInterrupcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsInterrupcao $data)
    {
      $data->delete();
      return $data;
    }
}
