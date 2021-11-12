<?php

namespace App\Http\Controllers;

use App\Models\OsContrato;
use Illuminate\Http\Request;

class OsContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsContrato::all();
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
      $data = new OsContrato;
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->TAXARENOVACAO = $request->TAXARENOVACAO;
      $data->DISTANCIA = $request->DISTANCIA;
      $data->INICIO = $request->INICIO;
      $data->VALORKM = $request->VALORKM;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->VALORPEDAGIO = $request->VALORPEDAGIO;
      $data->VALOR = $request->VALOR;
      $data->VALORMENSALIDADE = $request->VALORMENSALIDADE;
      $data->TERMINO = $request->TERMINO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsContrato  $osContrato
     * @return \Illuminate\Http\Response
     */
    public function show(OsContrato $osContrato)
    {
      return $osContrato;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsContrato  $osContrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsContrato $data)
    {
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->TAXARENOVACAO = $request->TAXARENOVACAO;
      $data->DISTANCIA = $request->DISTANCIA;
      $data->INICIO = $request->INICIO;
      $data->VALORKM = $request->VALORKM;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->VALORPEDAGIO = $request->VALORPEDAGIO;
      $data->VALOR = $request->VALOR;
      $data->VALORMENSALIDADE = $request->VALORMENSALIDADE;
      $data->TERMINO = $request->TERMINO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsContrato  $osContrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsContrato $data)
    {
      $data->delete();
      return $data;
    }
}
