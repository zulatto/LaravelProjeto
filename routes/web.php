<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerController;


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

Route::get('/', [ContainerController::class, 'index'])->name('container.index');

Route::get('/criar', [ContainerController::class, 'create'])->name('create');

Route::post('/criar', [ContainerController::class, 'store'])->name('createCntr');

Route::get('/editar/{id}', [ContainerController::class, 'update'])->name('update');

Route::put('/editar/{id}', [ContainerController::class, 'updateCntr'])->name('updateCntr');

Route::delete('/deletar/{id}', [ContainerController::class, 'destroy'])->name('delete');