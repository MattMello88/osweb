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
        //
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
        //
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
