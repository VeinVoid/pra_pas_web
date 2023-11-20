<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\HusbandoController;
use App\Http\Controllers\WaifuController;
use App\Models\Husbando;
use App\Models\Waifu;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/husbando', [HusbandoController::class, 'index']);

Route::get('/husbando/{husbando}', [HusbandoController::class, 'show']);

Route::get('/waifu', [WaifuController::class, 'index']);

Route::get('/waifu/{waifu}', [WaifuController::class, 'store']);

Route::get('/anime', [AnimeController::class, 'index']);

Route::get('/anime/{anime}', [AnimeController::class, 'show']);
