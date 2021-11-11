<?php

namespace App\Http\Controllers;

use App\Models\OsApontamento;
use Illuminate\Http\Request;

class OsApontamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsApontamento::all();
      return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsApontamento;
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->INTERVALO = $request->INTERVALO;
      $data->DT_SAIDA = $request->DT_SAIDA;
      $data->DT_CHEGADA = $request->DT_CHEGADA;
      $data->ID_ACOMPANHAMENTO = $request->ID_ACOMPANHAMENTO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsApontamento  $osApontamento
     * @return \Illuminate\Http\Response
     */
    public function show(OsApontamento $osApontamento)
    {
      return $osApontamento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsApontamento  $osApontamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsApontamento $data)
    {
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->INTERVALO = $request->INTERVALO;
      $data->DT_SAIDA = $request->DT_SAIDA;
      $data->DT_CHEGADA = $request->DT_CHEGADA;
      $data->ID_ACOMPANHAMENTO = $request->ID_ACOMPANHAMENTO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsApontamento  $osApontamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsApontamento $data)
    {
      $data->delete();
      return $data;
    }
}
