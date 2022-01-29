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
    return 'welcome';
});
// Rota de create
Route::get('/create', function () {
    return 'criar';
});
Route::post('/create', function () {
    return 'criar';
});
// Rota de update
Route::get('/update/{id}', function () {
    return 'editar';
});
Route::put('/update/{id}', function () {
    return 'editar';
});
// Rota de delete
Route::delete('/delete{id}', function () {
    return 'deletar';
});