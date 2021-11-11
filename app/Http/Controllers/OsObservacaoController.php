<?php

namespace App\Http\Controllers;

use App\Models\OsObservacao;
use Illuminate\Http\Request;

class OsObservacaoController extends Controller
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
      $data->ID_OBSERVACAO = $request->ID_OBSERVACAO;
      $data->DT_OBSERVACAO = $request->DT_OBSERVACAO;
      $data->DS_DESCRICAO = $request->DS_DESCRICAO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO = $request->ID_USUARIO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsObservacao  $osObservacao
     * @return \Illuminate\Http\Response
     */
    public function show(OsObservacao $osObservacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsObservacao  $osObservacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsObservacao $osObservacao)
    {
      $data->ID_OBSERVACAO = $request->ID_OBSERVACAO;
      $data->DT_OBSERVACAO = $request->DT_OBSERVACAO;
      $data->DS_DESCRICAO = $request->DS_DESCRICAO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO = $request->ID_USUARIO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsObservacao  $osObservacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsObservacao $osObservacao)
    {
        //
    }
}
