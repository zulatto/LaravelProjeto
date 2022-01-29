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

Route::get('/', 'ContainerController@Container');

//Route::get('/', [ContainerController::class, 'index'])->name('index');

Route::get('/criar', [CreateContainerController::class, 'create'])->name('create');

Route::post('/criar', [CreateContainerController::class, 'createCntr'])->name('createCntr');

Route::get('/editar/{id}', [UpdateContainerController::class, 'update'])->name('update');

Route::put('/editar/{id}', [UpdateContainerController::class, 'updateCntr'])->name('updateCntr');

Route::delete('/deletar/{id}', [DeleteContainerController::class, 'destroy'])->name('delete');