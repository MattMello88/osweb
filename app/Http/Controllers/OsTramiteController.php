<?php

namespace App\Http\Controllers;

use App\Models\OsTramite;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OsTramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return OsTramite::where(['ID_USUARIO_RESPONSAVEL' => $request->user()->ID_USUARIO])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsTramite;
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      //$data->DT_INICIO = isset($request->DT_INICIO) ? $request->DT_INICIO : now();
      $data->DS_TRAMITE = $request->DS_TRAMITE;
      $data->DM_ATENDIMENTO = '1';
      $data->DT_CRIACAO = isset($request->DT_CRIACAO) ? $request->DT_CRIACAO : now();
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_USUARIO_CRIADOR = $request->user()->ID_USUARIO;
      $data->ID_USUARIO_RESPONSAVEL = $request->ID_USUARIO_RESPONSAVEL;
      $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      $data->DM_STATUS = 0; //0 - não iniciado // 1 - iniciado // 2 - encerrado com sucesso // 3 encerrado com observação
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return OsTramite::where(['ID_TRAMITE' => $id])->get()->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = OsTramite::find($id);
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      if (isset($request->DT_INICIO))
        $data->DT_INICIO = $request->DT_INICIO;
      if (isset($request->DT_FIM))
        $data->DT_FIM = $request->DT_FIM;
      if (isset($request->DS_TRAMITE))
        $data->DS_TRAMITE = $request->DS_TRAMITE;
      if (isset($request->DM_ATENDIMENTO))
        $data->DM_ATENDIMENTO = $request->DM_ATENDIMENTO;
      if (isset($request->DS_SOLUCAO))
        $data->DS_SOLUCAO = $request->DS_SOLUCAO;
      if (isset($request->DM_STATUS))
        $data->DM_STATUS = $request->DM_STATUS;
      if (isset($request->DT_CRIACAO))
        $data->DT_CRIACAO = $request->DT_CRIACAO;
      if (isset($request->ID_CHAMADO))
        $data->ID_CHAMADO = $request->ID_CHAMADO;
      if (isset($request->ID_USUARIO_CRIADOR))
        $data->ID_USUARIO_CRIADOR = $request->ID_USUARIO_CRIADOR;
      if (isset($request->DS_REDUZIDA))
        $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      if (isset($request->NR_PRIORIDADE))
        $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      if (isset($request->DM_SITUACAO))
        $data->DM_SITUACAO = $request->DM_SITUACAO;

      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsTramite  $osTramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsTramite $data)
    {
      $data->delete();
      return $data;
    }
}
