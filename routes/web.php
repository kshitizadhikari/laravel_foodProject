<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
Route::get('/',  [MenuController::class, 'index']);

Route::post('/save-item', [MenuController::class, 'store'])->name('saveItem');
Route::get('/edit/{id}', [MenuController::class, 'edit']);
Route::get('/delete/{id}', [MenuController::class, 'delete']);
Route::post('/edit', [MenuController::class, 'update'])->name('updateItem');