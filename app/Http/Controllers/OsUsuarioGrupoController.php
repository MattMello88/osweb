<?php

namespace App\Http\Controllers;

use App\Models\OsUsuarioGrupo;
use Illuminate\Http\Request;

class OsUsuarioGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return OsUsuarioGrupo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsUsuarioGrupo;
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->NM_GRUPO = $request->NM_GRUPO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsUsuarioGrupo  $osUsuarioGrupo
     * @return \Illuminate\Http\Response
     */
    public function show(OsUsuarioGrupo $osUsuarioGrupo)
    {
      return $osUsuarioGrupo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsUsuarioGrupo  $osUsuarioGrupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsUsuarioGrupo $data)
    {
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->NM_GRUPO = $request->NM_GRUPO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsUsuarioGrupo  $osUsuarioGrupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsUsuarioGrupo $data)
    {
      $data->delete();
      return $data;
    }
}
