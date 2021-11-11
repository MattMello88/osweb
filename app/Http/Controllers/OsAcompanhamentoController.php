<?php

namespace App\Http\Controllers;

use App\Models\OsAcompanhamento;
use Illuminate\Http\Request;

class OsAcompanhamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsAcompanhamento::all();
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
      $data = new OsAcompanhamento;
      $data->ID_ACOMPANHAMENTO = $request->ID_ACOMPANHAMENTO;
      $data->VL_ADIANTAMENTO = $request->VL_ADIANTAMENTO;
      $data->MOTIVO = $request->MOTIVO;
      $data->DT_INICIO = $request->DT_INICIO;
      $data->DT_CADASTRO = $request->DT_CADASTRO;
      $data->DT_FIM = $request->DT_FIM;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsAcompanhamento  $osAcompanhamento
     * @return \Illuminate\Http\Response
     */
    public function show(OsAcompanhamento $osAcompanhamento)
    {
        return $osAcompanhamento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsAcompanhamento  $osAcompanhamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsAcompanhamento $data)
    {
      $data->ID_ACOMPANHAMENTO = $request->ID_ACOMPANHAMENTO;
      $data->VL_ADIANTAMENTO = $request->VL_ADIANTAMENTO;
      $data->MOTIVO = $request->MOTIVO;
      $data->DT_INICIO = $request->DT_INICIO;
      $data->DT_CADASTRO = $request->DT_CADASTRO;
      $data->DT_FIM = $request->DT_FIM;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsAcompanhamento  $osAcompanhamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsAcompanhamento $data)
    {
      $data->delete();
      return $data;
    }
}
