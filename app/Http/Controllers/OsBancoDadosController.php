<?php

namespace App\Http\Controllers;

use App\Models\OsBancoDado;
use Illuminate\Http\Request;

class OsBancoDadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsBancoDado::all();
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
      $data = new OsBancoDado;
      $data->ID_BANCO_DADOS = $request->ID_BANCO_DADOS;
      $data->DS_BANCO_DADOS = $request->DS_BANCO_DADOS;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsBancoDado  $osBancoDado
     * @return \Illuminate\Http\Response
     */
    public function show(OsBancoDado $osBancoDado)
    {
      return $osBancoDado;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsBancoDado  $osBancoDado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsBancoDado $data)
    {
      $data->ID_BANCO_DADOS = $request->ID_BANCO_DADOS;
      $data->DS_BANCO_DADOS = $request->DS_BANCO_DADOS;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsBancoDado  $osBancoDado
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsBancoDado $data)
    {
      $data->delete();
      return $data;
    }
}
