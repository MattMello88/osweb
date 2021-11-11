<?php

namespace App\Http\Controllers;

use App\Models\OsEmpresa;
use Illuminate\Http\Request;

class OsEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OsEmpresa::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->DATACADASTRO = $request->DATACADASTRO;
      $data->DS_SERVIDOR_APLICACAO_PRODUCAO = $request->DS_SERVIDOR_APLICACAO_PRODUCAO;
      $data->ATIVO = $request->ATIVO;
      $data->NR_IE = $request->NR_IE;
      $data->SUPORTE24HS = $request->SUPORTE24HS;
      $data->NM_FANTASIA = $request->NM_FANTASIA;
      $data->NR_TELEFONE2 = $request->NR_TELEFONE2;
      $data->DS_ACESSO_REMOTO_HOMOLOGACAO = $request->DS_ACESSO_REMOTO_HOMOLOGACAO;
      $data->NR_CNPJ = $request->NR_CNPJ;
      $data->DS_ACESSO_REMOTO_PRODUCAO = $request->DS_ACESSO_REMOTO_PRODUCAO;
      $data->NR_TELEFONE = $request->NR_TELEFONE;
      $data->DS_BANCO_DE_DADOS_HOMOLOGACAO = $request->DS_BANCO_DE_DADOS_HOMOLOGACAO;
      $data->NM_RAZAO_SOCIAL = $request->NM_RAZAO_SOCIAL;
      $data->DS_BANCO_DE_DADOS_PRODUCAO = $request->DS_BANCO_DE_DADOS_PRODUCAO;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_SERVIDOR_APLICACAO_HOMOLOGACAO = $request->DS_SERVIDOR_APLICACAO_HOMOLOGACAO;
      $data->DS_COMPLEMENTO = $request->DS_COMPLEMENTO;
      $data->DS_LOGRADOURO = $request->DS_LOGRADOURO;
      $data->DS_CIDADE = $request->DS_CIDADE;
      $data->DS_BAIRRO = $request->DS_BAIRRO;
      $data->DS_CEP = $request->DS_CEP;
      $data->NR_LOGRADOURO = $request->NR_LOGRADOURO;
      $data->DS_UF = $request->DS_UF;
      $data->ID_SEG_EMP = $request->ID_SEG_EMP;
      $data->ID_BANCO_DADOS = $request->ID_BANCO_DADOS;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsEmpresa  $osEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(OsEmpresa $osEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsEmpresa  $osEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsEmpresa $osEmpresa)
    {
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->DATACADASTRO = $request->DATACADASTRO;
      $data->DS_SERVIDOR_APLICACAO_PRODUCAO = $request->DS_SERVIDOR_APLICACAO_PRODUCAO;
      $data->ATIVO = $request->ATIVO;
      $data->NR_IE = $request->NR_IE;
      $data->SUPORTE24HS = $request->SUPORTE24HS;
      $data->NM_FANTASIA = $request->NM_FANTASIA;
      $data->NR_TELEFONE2 = $request->NR_TELEFONE2;
      $data->DS_ACESSO_REMOTO_HOMOLOGACAO = $request->DS_ACESSO_REMOTO_HOMOLOGACAO;
      $data->NR_CNPJ = $request->NR_CNPJ;
      $data->DS_ACESSO_REMOTO_PRODUCAO = $request->DS_ACESSO_REMOTO_PRODUCAO;
      $data->NR_TELEFONE = $request->NR_TELEFONE;
      $data->DS_BANCO_DE_DADOS_HOMOLOGACAO = $request->DS_BANCO_DE_DADOS_HOMOLOGACAO;
      $data->NM_RAZAO_SOCIAL = $request->NM_RAZAO_SOCIAL;
      $data->DS_BANCO_DE_DADOS_PRODUCAO = $request->DS_BANCO_DE_DADOS_PRODUCAO;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_SERVIDOR_APLICACAO_HOMOLOGACAO = $request->DS_SERVIDOR_APLICACAO_HOMOLOGACAO;
      $data->DS_COMPLEMENTO = $request->DS_COMPLEMENTO;
      $data->DS_LOGRADOURO = $request->DS_LOGRADOURO;
      $data->DS_CIDADE = $request->DS_CIDADE;
      $data->DS_BAIRRO = $request->DS_BAIRRO;
      $data->DS_CEP = $request->DS_CEP;
      $data->NR_LOGRADOURO = $request->NR_LOGRADOURO;
      $data->DS_UF = $request->DS_UF;
      $data->ID_SEG_EMP = $request->ID_SEG_EMP;
      $data->ID_BANCO_DADOS = $request->ID_BANCO_DADOS;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsEmpresa  $osEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsEmpresa $osEmpresa)
    {
        //
    }
}
