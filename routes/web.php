<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/dashboard/cadastros', function () {
    return view('dashboard/cadastros/index');
});

Route::get('/dashboard/chamados', function () {
    return view('dashboard/chamados/index');
});

Route::get('/dashboard/relatorios', function () {
    return view('dashboard/relatorios/index');
});

Route::get('/dashboard/chamado/{id}', function ($id) {
    return view('dashboard/chamados/chamado',['id' => $id]);
});
