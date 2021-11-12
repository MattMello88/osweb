<?php

namespace App\Http\Controllers;

use App\Models\OsSegmento;
use Illuminate\Http\Request;

class OsSegmentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return OsSegmento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new OsSegmento;
      $data->ID_SEG_EMP = $request->ID_SEG_EMP;
      $data->COD_RECEITA = $request->COD_RECEITA;
      $data->DS_SEG_EMP = $request->DS_SEG_EMP;
      $data->save();
      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsSegmento  $osSegmento
     * @return \Illuminate\Http\Response
     */
    public function show(OsSegmento $osSegmento)
    {
      return $osSegmento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsSegmento  $osSegmento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsSegmento $data)
    {
      $data->ID_SEG_EMP = $request->ID_SEG_EMP;
      $data->COD_RECEITA = $request->COD_RECEITA;
      $data->DS_SEG_EMP = $request->DS_SEG_EMP;
      $data->save();
      return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsSegmento  $osSegmento
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsSegmento $data)
    {
      $data->delete();
      return $data;
    }
}
