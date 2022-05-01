<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserBookController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FinishedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/datoUsuario', [UserBookController::class, 'usuarioPersonal']);
Route::post('/favoritoUsuario', [FavoriteController::class, 'usuarioFavorito']);
Route::post('/leidoUsuario', [FinishedController::class, 'usuarioFinished']);
Route::post('/librosCategoria', [BookController::class, 'librosCategoria']);
Route::post('/datosLibro', [BookController::class, 'datosLibro']);
