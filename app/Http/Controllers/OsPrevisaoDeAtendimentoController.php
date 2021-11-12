<?php

namespace App\Http\Controllers;

use App\Models\OsPrevisaoDeAtendimento;
use Illuminate\Http\Request;

class OsPrevisaoDeAtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return OsPrevisaoDeAtendimento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsPrevisaoDeAtendimento;
      $data->ID_PREVISAO_DE_ATENTIMENTO = $request->ID_PREVISAO_DE_ATENTIMENTO;
      $data->ENCERRAMENTO = $request->ENCERRAMENTO;
      $data->SLA = $request->SLA;
      $data->INICIO = $request->INICIO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsPrevisaoDeAtendimento  $osPrevisaoDeAtendimento
     * @return \Illuminate\Http\Response
     */
    public function show(OsPrevisaoDeAtendimento $osPrevisaoDeAtendimento)
    {
      return $osPrevisaoDeAtendimento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsPrevisaoDeAtendimento  $osPrevisaoDeAtendimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsPrevisaoDeAtendimento $data)
    {
      $data->ID_PREVISAO_DE_ATENTIMENTO = $request->ID_PREVISAO_DE_ATENTIMENTO;
      $data->ENCERRAMENTO = $request->ENCERRAMENTO;
      $data->SLA = $request->SLA;
      $data->INICIO = $request->INICIO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsPrevisaoDeAtendimento  $osPrevisaoDeAtendimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsPrevisaoDeAtendimento $data)
    {
      $data->delete();
      return $data;
    }
}
