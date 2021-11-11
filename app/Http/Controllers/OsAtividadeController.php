<?php

namespace App\Http\Controllers;

use App\Models\OsAtividade;
use Illuminate\Http\Request;

class OsAtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsAtividade::all();
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
      $data = new OsAtividade;
      $data->ID_ATIVIDADE = $request->ID_ATIVIDADE;
      $data->TITULO = $request->TITULO;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsAtividade  $osAtividade
     * @return \Illuminate\Http\Response
     */
    public function show(OsAtividade $osAtividade)
    {
      return $osAtividade;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsAtividade  $osAtividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsAtividade $data)
    {
      $data->ID_ATIVIDADE = $request->ID_ATIVIDADE;
      $data->TITULO = $request->TITULO;
      $data->DESCRICAO = $request->DESCRICAO;
      $data->ID_APONTAMENTO = $request->ID_APONTAMENTO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsAtividade  $osAtividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsAtividade $data)
    {
      $data->delete();
      return $data;
    }
}
