<?php

namespace App\Http\Controllers;

use App\Models\OsContato;
use Illuminate\Http\Request;

class OsContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsContato::all();
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
      $data = new OsContato;
      $data->ID_CONTATO = $request->ID_CONTATO;
      $data->DS_RAMAL = $request->DS_RAMAL;
      $data->DS_TELEFONE = $request->DS_TELEFONE;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_FUNCAO = $request->DS_FUNCAO;
      $data->NM_CONTATO = $request->NM_CONTATO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsContato  $osContato
     * @return \Illuminate\Http\Response
     */
    public function show(OsContato $osContato)
    {
      return $osContato;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsContato  $osContato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsContato $data)
    {
      $data->ID_CONTATO = $request->ID_CONTATO;
      $data->DS_RAMAL = $request->DS_RAMAL;
      $data->DS_TELEFONE = $request->DS_TELEFONE;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_FUNCAO = $request->DS_FUNCAO;
      $data->NM_CONTATO = $request->NM_CONTATO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsContato  $osContato
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsContato $data)
    {
      $data->delete();
      return $data;
    }
}
