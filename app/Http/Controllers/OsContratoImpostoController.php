<?php

namespace App\Http\Controllers;

use App\Models\OsContratoImposto;
use Illuminate\Http\Request;

class OsContratoImpostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsContratoImposto::all();
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
      $data = new OsContratoImposto;
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function show(OsContratoImposto $osContratoImposto)
    {
      return $osContratoImposto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsContratoImposto $data)
    {
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsContratoImposto $data)
    {
      $data->delete();
      return $data;
    }
}
