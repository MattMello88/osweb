<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
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

Route::get('/b', function () {
  $tables = DB::select("SELECT t.table_name FROM information_schema.tables t WHERE t.table_schema = 'osweb' AND t.table_name LIKE 'os_%'");


  foreach ($tables as $table) {
    echo "{$table->table_name}<br/><hr>";
    $colunas = DB::select("SELECT t.column_name FROM information_schema.columns t WHERE t.table_schema = 'osweb' AND t.table_name = '{$table->table_name}'");
    foreach ($colunas as $coluna) {
       echo "\$data->{$coluna->column_name} = \$request->{$coluna->column_name};<br/>";
    }
    echo "<br/><br/>";
  }
});



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
      return view('dashboard/chamados/index', ['view' => 'chamados']);
  });

  Route::get('/tramites', function () {
    return view('dashboard/tramites/index', ['view' => 'tramites']);
  });

  Route::get('/relatorios', function () {
      return view('dashboard/relatorios/index');
  });

  Route::get('/chamado/{id}', function ($id) {
      return view('dashboard/chamados/chamado',['id' => $id]);
  });

});
