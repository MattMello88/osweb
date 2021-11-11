<?php

namespace App\Http\Controllers;

use App\Models\OsUsuarioEmpresa;
use Illuminate\Http\Request;

class OsUsuarioEmpresaController extends Controller
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
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsUsuarioEmpresa  $osUsuarioEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(OsUsuarioEmpresa $osUsuarioEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsUsuarioEmpresa  $osUsuarioEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsUsuarioEmpresa $osUsuarioEmpresa)
    {
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->ID_EMPRESA = $request->ID_EMPRESA;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsUsuarioEmpresa  $osUsuarioEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsUsuarioEmpresa $osUsuarioEmpresa)
    {
        //
    }
}
