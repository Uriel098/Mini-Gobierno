<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// api de Tramites
Route::get ('/Tramites', [TramiteController::class, 'list']);
Route::get ('/Tramites/{id}', [TramiteController::class, 'item']);
Route::post ('/Tramites/create', [TramiteController::class, 'create']);
Route::post ('/Tramites/update', [TramiteController::class, 'update']);
Route::delete ('/Tramites/{id}', [TramiteController::class, 'delete']);

// api de Tipos
Route::get ('/Tipos', [TipoController::class, 'list']);
Route::get ('/Tipos/{id}', [TipoController::class, 'item']);
Route::post ('/Tipos/create', [TipoController::class, 'create']);
Route::post ('/Tipos/update', [TipoController::class, 'update']);
Route::delete ('/Tipos/{id}', [TipoController::class, 'delete']);

// api de Dependencias
Route::get ('/Dependencias', [DependenciaController::class, 'list']);
Route::get ('/Dependencias/{id}', [DependenciaController::class, 'item']);
Route::post ('/Dependencias/create', [DependenciaController::class, 'create']);
Route::post ('/Dependencias/update', [DependenciaController::class, 'update']);
Route::delete ('/Dependencias/{id}', [DependenciaController::class, 'delete']);

// api de Usuarios
Route::get ('/Usuarios', [UsuarioController::class, 'list']);
Route::get ('/Usuarios/{id}', [UsuarioController::class, 'item']);
Route::post ('/Usuarios/create', [UsuarioController::class, 'create']);
Route::post ('/Usuarios/update', [UsuarioController::class, 'update']);
Route::delete ('/Usuarios/{id}', [UsuarioController::class, 'delete']);
