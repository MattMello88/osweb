<?php

namespace App\Http\Controllers;

use App\Models\OsImposto;
use Illuminate\Http\Request;

class OsImpostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return OsImposto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsImposto;
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
      $data->NOME = $request->NOME;
      $data->VALOR = $request->VALOR;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsImposto  $osImposto
     * @return \Illuminate\Http\Response
     */
    public function show(OsImposto $osImposto)
    {
      return $osImposto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsImposto  $osImposto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsImposto $data)
    {
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
      $data->NOME = $request->NOME;
      $data->VALOR = $request->VALOR;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsImposto  $osImposto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsImposto $data)
    {
      $data->delete();
      return $data;
    }
}
