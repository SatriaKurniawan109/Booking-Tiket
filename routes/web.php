<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/film', [FilmController::class, 'index']);
// Route::post('/film', [FilmController::class, 'store']);

Route::get('/transaction', [TransactionController::class, 'index']);
// Route::get('/transaction', [TransactionController::class, 'create']);
Route::post('/transaction', [TransactionController::class, 'store']);