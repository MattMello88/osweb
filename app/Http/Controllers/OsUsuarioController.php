<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OsUsuarioController extends Controller
{
  public function login(Request $request){
    $request->validate([
        'ds_login' => ['required'],
        'ds_senha' => 'required',
    ]);

    $user = User::where('ds_login', $request->ds_login)->first();

    if (! $user || ! md5($request->ds_senha) === $user->ds_senha) {
        throw ValidationException::withMessages([
            'message' => ['As credenciais informadas estão inválidas.'],
        ]);
    }

    $data = [
        "token" => $user->createToken($request->ds_login)->plainTextToken,
        "usuario" => $user
    ];

    session()->put('nome','matheus');
    session()->put('usuario',$user);
    session()->put('token',$data['token']);

    return $data;
}

  public function logout(Request $request){
      session()->flush();
      session()->invalidate();
      $request->user()->currentAccessToken()->delete();
  }
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
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_TELEFONE = $request->DS_TELEFONE;
      $data->NM_USUARIO = $request->NM_USUARIO;
      $data->DS_FUNCAO = $request->DS_FUNCAO;
      $data->DS_SENHA = $request->DS_SENHA;
      $data->ATIVO = $request->ATIVO;
      $data->DS_LOGIN = $request->DS_LOGIN;
      $data->DT_EXPIRA = $request->DT_EXPIRA;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
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
      $data->ID_USUARIO = $request->ID_USUARIO;
      $data->DS_EMAIL = $request->DS_EMAIL;
      $data->DS_TELEFONE = $request->DS_TELEFONE;
      $data->NM_USUARIO = $request->NM_USUARIO;
      $data->DS_FUNCAO = $request->DS_FUNCAO;
      $data->DS_SENHA = $request->DS_SENHA;
      $data->ATIVO = $request->ATIVO;
      $data->DS_LOGIN = $request->DS_LOGIN;
      $data->DT_EXPIRA = $request->DT_EXPIRA;
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
