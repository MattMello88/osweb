<?php

namespace App\Http\Controllers;

use App\Models\OsTitulo;
use Illuminate\Http\Request;

class OsTituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return OsTitulo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsTitulo;
      $data->ID = $request->ID;
      $data->VENCIMENTO = $request->VENCIMENTO;
      $data->PAGAMENTO = $request->PAGAMENTO;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->STATUS = $request->STATUS;
      $data->FORMAPAGAMENTO = $request->FORMAPAGAMENTO;
      $data->VALOR = $request->VALOR;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsTitulo  $osTitulo
     * @return \Illuminate\Http\Response
     */
    public function show(OsTitulo $osTitulo)
    {
      return $osTitulo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsTitulo  $osTitulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsTitulo $data)
    {
      $data->ID = $request->ID;
      $data->VENCIMENTO = $request->VENCIMENTO;
      $data->PAGAMENTO = $request->PAGAMENTO;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->STATUS = $request->STATUS;
      $data->FORMAPAGAMENTO = $request->FORMAPAGAMENTO;
      $data->VALOR = $request->VALOR;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsTitulo  $osTitulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsTitulo $data)
    {
      $data->delete();
      return $data;
    }
}
