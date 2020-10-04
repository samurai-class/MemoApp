<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemosController;

use App\Models\Memo;

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

Route::get('/', [MemosController::class, 'index'])->name('index');

Route::get('/create', [MemosController::class, 'create'])->name('create');
Route::post('/store', [MemosController::class, 'store'])->name('store');

Route::post('/edit', [MemosController::class, 'edit'])->name('edit');
Route::post('/update', [MemosController::class, 'update'])->name('update');

Route::get('/delete', [MemosController::class, 'delete'])->name('delete');