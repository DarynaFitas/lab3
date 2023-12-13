<?php

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

use App\Http\Controllers\OblikController;

Route::get('/oblik/create', [OblikController::class, 'create']);

Route::post('/oblik', [OblikController::class, 'store']);

Route::get('/oblik', [OblikController::class, 'index']);

Route::get('/oblik/{oblik}', [OblikController::class, 'show']);

Route::get('/oblik/{oblik}/edit', [OblikController::class, 'edit']);

Route::put('/oblik/{oblik}', [OblikController::class, 'update']);

Route::delete('/oblik/{oblik}', [OblikController::class, 'destroy']);

