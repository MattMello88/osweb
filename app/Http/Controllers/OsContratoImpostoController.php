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
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function show(OsContratoImposto $osContratoImposto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsContratoImposto $osContratoImposto)
    {
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->ID_IMPOSTO = $request->ID_IMPOSTO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsContratoImposto  $osContratoImposto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsContratoImposto $osContratoImposto)
    {
        //
    }
}
