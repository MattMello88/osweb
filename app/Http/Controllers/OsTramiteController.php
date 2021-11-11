<?php

namespace App\Http\Controllers;

use App\Models\OsTramite;
use Illuminate\Http\Request;

class OsTramiteController extends Controller
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
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      $data->DT_INICIO = $request->DT_INICIO;
      $data->DT_FIM = $request->DT_FIM;
      $data->DS_TRAMITE = $request->DS_TRAMITE;
      $data->DM_ATENDIMENTO = $request->DM_ATENDIMENTO;
      $data->DS_SOLUCAO = $request->DS_SOLUCAO;
      $data->DM_STATUS = $request->DM_STATUS;
      $data->DT_CRIACAO = $request->DT_CRIACAO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO_CRIADOR = $request->ID_USUARIO_CRIADOR;
      $data->ID_USUARIO_RESPONSAVEL = $request->ID_USUARIO_RESPONSAVEL;
      $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      $data->DM_SITUACAO = $request->DM_SITUACAO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function show(OsTramite $osTramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsTramite $osTramite)
    {
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      $data->DT_INICIO = $request->DT_INICIO;
      $data->DT_FIM = $request->DT_FIM;
      $data->DS_TRAMITE = $request->DS_TRAMITE;
      $data->DM_ATENDIMENTO = $request->DM_ATENDIMENTO;
      $data->DS_SOLUCAO = $request->DS_SOLUCAO;
      $data->DM_STATUS = $request->DM_STATUS;
      $data->DT_CRIACAO = $request->DT_CRIACAO;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO_CRIADOR = $request->ID_USUARIO_CRIADOR;
      $data->ID_USUARIO_RESPONSAVEL = $request->ID_USUARIO_RESPONSAVEL;
      $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      $data->DM_SITUACAO = $request->DM_SITUACAO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsTramite $osTramite)
    {
        //
    }
}
