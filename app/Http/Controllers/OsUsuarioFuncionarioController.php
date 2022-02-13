<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OsUsuarioFuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('os_usuario')
            ->join('os_usuario_grupo', 'os_usuario.id_usuario', '=', 'os_usuario_grupo.id_usuario')
            ->select('os_usuario.*', 'os_usuario_grupo.*')
            ->where('os_usuario_grupo.nm_grupo', '=', 'funcionarios')
            ->get();
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DB::table('os_usuario')
            ->join('os_usuario_grupo', 'os_usuario.id_usuario', '=', 'os_usuario_grupo.id_usuario')
            ->select('os_usuario.*', 'os_usuario_grupo.*')
            ->where('os_usuario_grupo.nm_grupo', '=', 'funcionarios')
            ->where('os_usuario.id_usuario', '=', $id)
            ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
