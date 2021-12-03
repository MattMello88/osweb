<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OsUsuarioController;
use App\Http\Controllers\OsChamadoController;
use App\Http\Controllers\OsEmpresaController;
use App\Http\Controllers\OsEmpresaProdutoController;
use App\Http\Controllers\OsAssuntoController;

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
    return ['Authorization' => 'true'];
  });

  Route::resource('oschamado', OsChamadoController::class)->names('oschamado');
  Route::resource('osempresa', OsEmpresaController::class)->names('osempresa');
  Route::resource('osempresaproduto', OsEmpresaProdutoController::class)->names('osempresaproduto');
  Route::resource('osassunto', OsAssuntoController::class)->names('osassunto');
});

Route::prefix('usuario')->group(function () {
  Route::post('/login', [OsUsuarioController::class, 'login']);
});

Route::get('/', function () {
  return view('home');
});
