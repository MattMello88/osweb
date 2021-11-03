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

Route::get('/cadastros', function () {
    return view('dashboard/cadastros');
});

Route::get('/chamados', function () {
    return view('dashboard/chamados');
});

Route::get('/relatorios', function () {
    return view('dashboard/relatorios');
});