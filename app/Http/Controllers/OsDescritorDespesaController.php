<?php

namespace App\Http\Controllers;

use App\Models\OsContratoDespesa;
use Illuminate\Http\Request;

class OsDescritoroDespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data->ID_DESCRITOR_DESPESA = $request->ID_DESCRITOR_DESPESA;
      $data->DESCRICAO = $request->DESCRICAO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsContratoDespesa  $osContratoDespesa
     * @return \Illuminate\Http\Response
     */
    public function show(OsContratoDespesa $osContratoDespesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsContratoDespesa  $osContratoDespesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsContratoDespesa $osContratoDespesa)
    {
      $data->ID_DESCRITOR_DESPESA = $request->ID_DESCRITOR_DESPESA;
      $data->DESCRICAO = $request->DESCRICAO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsContratoDespesa  $osContratoDespesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsContratoDespesa $osContratoDespesa)
    {
        //
    }
}
