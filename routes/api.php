<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OsUsuarioController;
use App\Http\Controllers\OsChamadoController;

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
});

Route::prefix('usuario')->group(function () {
  Route::post('/login', [OsUsuarioController::class, 'login']);
});

Route::get('/', function () {
  return view('home');
});
