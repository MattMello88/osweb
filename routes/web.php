<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('login');

/*Route::get('/dashboard', function () {
  return view('dashboard/dashboard');
});*/



Route::prefix('dashboard')->group(function () {

  Route::get('/', function () {
    return view('dashboard/dashboard');
  });

  Route::get('/logout', function (Request $request) {
    session()->flush();
    session()->invalidate();

    return redirect()->route('login');
  });


  Route::get('/cadastros', function () {
      return view('dashboard/cadastros/index');
  });

  Route::get('/chamados', function () {
      return view('dashboard/chamados/index');
  });

  Route::get('/relatorios', function () {
      return view('dashboard/relatorios/index');
  });

  Route::get('/chamado/{id}', function ($id) {
      return view('dashboard/chamados/chamado',['id' => $id]);
  });

});
