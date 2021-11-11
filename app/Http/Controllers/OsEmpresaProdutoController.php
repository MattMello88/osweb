<?php

namespace App\Http\Controllers;

use App\Models\OsEmpresaProduto;
use Illuminate\Http\Request;

class OsEmpresaProdutoController extends Controller
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
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsEmpresaProduto  $osEmpresaProduto
     * @return \Illuminate\Http\Response
     */
    public function show(OsEmpresaProduto $osEmpresaProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsEmpresaProduto  $osEmpresaProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OsEmpresaProduto $osEmpresaProduto)
    {
      $data->ID_EMPRESA = $request->ID_EMPRESA;
      $data->ID_PRODUTO = $request->ID_PRODUTO;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsEmpresaProduto  $osEmpresaProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsEmpresaProduto $osEmpresaProduto)
    {
        //
    }
}
