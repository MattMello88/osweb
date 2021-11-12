<?php

namespace App\Http\Controllers;

use App\Models\OsDespesa;
use Illuminate\Http\Request;

class OsDespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsDespesa::all();
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
      $data = new OsDespesa;
      $data->ID_DESPESA = $request->ID_DESPESA;
      $data->VALOR = $request->VALOR;
      $data->QUANTIDADE = $request->QUANTIDADE;
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->ID_DESCRITOR_DESPESA = $request->ID_DESCRITOR_DESPESA;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsDespesa  $osDespesa
     * @return \Illuminate\Http\Response
     */
    public function show(OsDespesa $osDespesa)
    {
        return $osDespesa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsDespesa  $osDespesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsDespesa $data)
    {
      $data->ID_DESPESA = $request->ID_DESPESA;
      $data->VALOR = $request->VALOR;
      $data->QUANTIDADE = $request->QUANTIDADE;
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->ID_DESCRITOR_DESPESA = $request->ID_DESCRITOR_DESPESA;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsDespesa  $osDespesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsDespesa $data)
    {
      $data->delete();
      return $data;
    }
}
