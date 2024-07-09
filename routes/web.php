<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [ProductoController::class, 'index']);

Route::post('/save', [ProductoController::class, 'store']);
Route::delete('/delete/producto/{id}', [ProductoController::class, 'delete']);
Route::get('/edit/producto/{id}', [ProductoController::class, 'edit']);
Route::put('/producto/update/{id}', [ProductoController::class, 'update']);