<?php

namespace App\Http\Controllers;

use App\Models\OsAnexo;
use Illuminate\Http\Request;

class OsAnexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsAnexo::all();
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
      $data = new OsAnexo;
      $data->ID_ANEXO = $request->ID_ANEXO;
      $data->DS_ARQUIVO = $request->DS_ARQUIVO;
      $data->DS_ARQUIVO_ORIGINAL = $request->DS_ARQUIVO_ORIGINAL;
      $data->DS_CAMINHO = $request->DS_CAMINHO;
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsAnexo  $osAnexo
     * @return \Illuminate\Http\Response
     */
    public function show(OsAnexo $osAnexo)
    {
      return $osAnexo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsAnexo  $osAnexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsAnexo $data)
    {
      $data->ID_ANEXO = $request->ID_ANEXO;
      $data->DS_ARQUIVO = $request->DS_ARQUIVO;
      $data->DS_ARQUIVO_ORIGINAL = $request->DS_ARQUIVO_ORIGINAL;
      $data->DS_CAMINHO = $request->DS_CAMINHO;
      $data->ID_TRAMITE = $request->ID_TRAMITE;
      $data->ID_CHAMADO = $request->ID_CHAMADO;
      $data->ID_CONTRATO = $request->ID_CONTRATO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsAnexo  $osAnexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsAnexo $data)
    {
      $data->delete();
      return $data;
    }
}
