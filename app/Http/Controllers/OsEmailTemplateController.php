<?php

namespace App\Http\Controllers;

use App\Models\OsEmailTemplate;
use Illuminate\Http\Request;

class OsEmailTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = OsEmailTemplate::all();
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
      $data = new OsEmailTemplate;
      $data->ID_EMAIL_TEMPLATE = $request->ID_EMAIL_TEMPLATE;
      $data->DS_HTML = $request->DS_HTML;
      $data->DS_MARCADORES = $request->DS_MARCADORES;
      $data->DS_EMAIL_TEMPLATE = $request->DS_EMAIL_TEMPLATE;
      $data->TIPO = $request->TIPO;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsEmailTemplate  $osEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(OsEmailTemplate $osEmailTemplate)
    {
      return $osEmailTemplate;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsEmailTemplate  $osEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsEmailTemplate $data)
    {
      $data->ID_EMAIL_TEMPLATE = $request->ID_EMAIL_TEMPLATE;
      $data->DS_HTML = $request->DS_HTML;
      $data->DS_MARCADORES = $request->DS_MARCADORES;
      $data->DS_EMAIL_TEMPLATE = $request->DS_EMAIL_TEMPLATE;
      $data->TIPO = $request->TIPO;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsEmailTemplate  $osEmailTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsEmailTemplate $data)
    {
      $data->delete();
      return $data;
    }
}
