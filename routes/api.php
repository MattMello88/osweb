<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OsUsuarioController;
use App\Http\Controllers\OsChamadoController;
use App\Http\Controllers\OsEmpresaController;
use App\Http\Controllers\OsEmpresaProdutoController;
use App\Http\Controllers\OsAssuntoController;
use App\Http\Controllers\OsObservacaoController;
use App\Http\Controllers\OsUsuarioFuncionarioController;
use App\Http\Controllers\OsTramiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
  Route::get('/checkLogin', function (Request $request) {
    return ['Authorization' => 'true', 'usuario' => $request->user()];
  });

  Route::resource('oschamado', OsChamadoController::class)->names('oschamado');
  Route::resource('ostramite', OsTramiteController::class)->names('ostramite');
  Route::resource('osusuariofuncionario', OsUsuarioFuncionarioController::class)->names('osusuariofuncionario');
  Route::resource('osempresa', OsEmpresaController::class)->names('osempresa');
  Route::resource('osempresaproduto', OsEmpresaProdutoController::class)->names('osempresaproduto');
  Route::resource('osassunto', OsAssuntoController::class)->names('osassunto');
  Route::resource('osobservacao', OsObservacaoController::class)->names('osobservacao');
});

Route::prefix('usuario')->group(function () {
  Route::post('/login', [OsUsuarioController::class, 'login']);
});

Route::get('/', function () {
  return view('home');
});
