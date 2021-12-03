<?php

namespace App\Http\Controllers;

use App\Models\OsAssunto;
use Illuminate\Http\Request;

class OsAssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = OsAssunto::where(['ID_PRODUTO' => $request->ID_PRODUTO])->get();
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
      $data = new OsAssunto;
      $data->ID_ASSUNTO = $request->ID_ASSUNTO;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DM_SLA = $request->DM_SLA;
      $data->DS_ASSUNTO = $request->DS_ASSUNTO;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsAssunto  $osAssunto
     * @return \Illuminate\Http\Response
     */
    public function show(OsAssunto $osAssunto)
    {
      return $osAssunto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsAssunto  $osAssunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsAssunto $data)
    {
      $data->ID_ASSUNTO = $request->ID_ASSUNTO;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DM_SLA = $request->DM_SLA;
      $data->DS_ASSUNTO = $request->DS_ASSUNTO;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsAssunto  $osAssunto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsAssunto $data)
    {
      $data->delete();
      return $data;
    }
}
