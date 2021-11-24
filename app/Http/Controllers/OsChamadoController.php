<?php

namespace App\Http\Controllers;

use App\Models\OsChamado;
use Illuminate\Http\Request;

class OsChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $where = [
        'ID_RESPONSAVEL' => $request->user()->ID_USUARIO
      ];

      if (isset($request->ID_CHAMADO))
        $where['ID_CHAMADO'] = $request->ID_CHAMADO;
      if (isset($request->DT_ABERTURA))
        $where['DT_ABERTURA'] = $request->DT_ABERTURA;
      if (isset($request->DT_ENCERRAMENTO))
        $where['DT_ENCERRAMENTO'] = $request->DT_ENCERRAMENTO;
      if (isset($request->DM_STATUS))
        $where['DM_STATUS'] = $request->DM_STATUS;
      if (isset($request->ID_EMPRESA))
        $where['ID_EMPRESA'] = $request->ID_EMPRESA;
      if (isset($request->ID_PRODUTO))
        $where['ID_PRODUTO'] = $request->ID_PRODUTO;
      if (isset($request->ID_ASSUNTO))
        $where['ID_ASSUNTO'] = $request->ID_ASSUNTO;

      $data = OsChamado::where($where)->with(['empresa', 'assunto', 'usuario', 'produto', 'previsao', 'criador'])->get();

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
      $data = new OsChamado;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->DT_DATA_DESEJAVEL_DE_ENTREGA = $request->DT_DATA_DESEJAVEL_DE_ENTREGA;
      $data->PORCENTUALDECONCLUSAO = $request->PORCENTUALDECONCLUSAO;
      $data->DM_STATUS = $request->DM_STATUS;
      $data->DS_VERSAO_PRODUTO = $request->DS_VERSAO_PRODUTO;
      $data->DT_ABERTURA = $request->DT_ABERTURA;
      $data->DS_SISTEMA_OPERACIONAL = $request->DS_SISTEMA_OPERACIONAL;
      $data->DS_CHAMADO = $request->DS_CHAMADO;
      $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      $data->DT_ENCERRAMENTO = $request->DT_ENCERRAMENTO;
      $data->DS_SOLUCAO = $request->DS_SOLUCAO;
      $data->DT_CRIACAO = $request->DT_CRIACAO;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
      $data->ID_RESPONSAVEL = $request->ID_RESPONSAVEL;
      $data->ID_ASSUNTO = $request->ID_ASSUNTO;
      $data->ID_CRIADOR = $request->ID_CRIADOR;
      $data->PREVISAODEATENDIMENTO_ID_PREVISAO_DE_ATENTIMENTO = $request->PREVISAODEATENDIMENTO_ID_PREVISAO_DE_ATENTIMENTO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->DM_CLASSIFICACAO = $request->DM_CLASSIFICACAO;
      $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsChamado  $osChamado
     * @return \Illuminate\Http\Response
     */
    public function show(OsChamado $osChamado)
    {
      return $osChamado;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsChamado  $osChamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsChamado $data)
    {
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->DT_DATA_DESEJAVEL_DE_ENTREGA = $request->DT_DATA_DESEJAVEL_DE_ENTREGA;
      $data->PORCENTUALDECONCLUSAO = $request->PORCENTUALDECONCLUSAO;
      $data->DM_STATUS = $request->DM_STATUS;
      $data->DS_VERSAO_PRODUTO = $request->DS_VERSAO_PRODUTO;
      $data->DT_ABERTURA = $request->DT_ABERTURA;
      $data->DS_SISTEMA_OPERACIONAL = $request->DS_SISTEMA_OPERACIONAL;
      $data->DS_CHAMADO = $request->DS_CHAMADO;
      $data->NR_PRIORIDADE = $request->NR_PRIORIDADE;
      $data->DT_ENCERRAMENTO = $request->DT_ENCERRAMENTO;
      $data->DS_SOLUCAO = $request->DS_SOLUCAO;
      $data->DT_CRIACAO = $request->DT_CRIACAO;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
      $data->ID_RESPONSAVEL = $request->ID_RESPONSAVEL;
      $data->ID_ASSUNTO = $request->ID_ASSUNTO;
      $data->ID_CRIADOR = $request->ID_CRIADOR;
      $data->PREVISAODEATENDIMENTO_ID_PREVISAO_DE_ATENTIMENTO = $request->PREVISAODEATENDIMENTO_ID_PREVISAO_DE_ATENTIMENTO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->DM_CLASSIFICACAO = $request->DM_CLASSIFICACAO;
      $data->DS_REDUZIDA = $request->DS_REDUZIDA;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsChamado  $osChamado
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsChamado $data)
    {
      $data->delete();
      return $data;
    }
}
