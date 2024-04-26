<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NivelController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Auth::routes();

//Rutas de Dependencias
Route::get('/dependencias',[DependenciaController::class, 'index'])->name('dependencias.dependencias');
Route::get('/dependencias/crear',[DependenciaController::class,'DependenciasCrear'])->name('DependenciasCrear');
Route::post('/dependencias/crear',[DependenciaController::class,'DependenciaCreate'])->name('DependenciaCreate');
Route::get('/dependencias/editar/{id}',[DependenciaController::class, 'DependenciasEditar'])->name('DependenciasEditar');
Route::post('/dependencias/editar/{id}',[DependenciaController::class, 'DependenciasEdit'])->name('DependenciasEdit');
Route::delete('/dependencias/eliminar/{id}',[DependenciaController::class, 'DependenciasDelete'])->name('DependenciasDelete');


//Rutas de Tipos
Route::get('/tipos',[TipoController::class, 'index'])->name('tipos.tipos');
Route::get('/tipos/crear',[TipoController::class,'TiposCrear'])->name('TiposCrear');
Route::post('/tipos/crear',[TipoController::class,'TipoCreate'])->name('TipoCreate');
Route::get('/tipos/editar/{id}',[TipoController::class, 'TiposEditar'])->name('TiposEditar');
Route::post('/tipos/editar/{id}',[TipoController::class, 'TiposEdit'])->name('TiposEdit');
Route::delete('/tipos/eliminar/{id}',[TipoController::class, 'TiposDelete'])->name('TiposDelete');


//Rutas de Tramites
Route::get('/tramites',[TramiteController::class, 'index'])->name('tramites.tramites');
Route::get('/tramites/crear',[TramiteController::class,'TramitesCrear'])->name('TramitesCrear');
Route::post('/tramites/crear',[TramiteController::class,'TramiteCreate'])->name('TramiteCreate');
Route::get('/tramites/editar/{id}',[TramiteController::class, 'TramitesEditar'])->name('TramitesEditar');
Route::post('/tramites/editar/{id}',[TramiteController::class, 'TramitesEdit'])->name('TramitesEdit');
Route::delete('/tramites/eliminar/{id}',[TramiteController::class, 'TramitesDelete'])->name('TramitesDelete');

//Rutas de Users
Route::get('/users',[UserController::class, 'index'])->name('users.users');
Route::get('/users/crear',[UserController::class,'UsersCrear'])->name('UsersCrear');
Route::post('/users/crear',[UserController::class,'UserCreate'])->name('UserCreate');
Route::get('/users/editar/{id}',[UserController::class, 'UsersEditar'])->name('UsersEditar');
Route::post('/users/editar/{id}',[UserController::class, 'UsersEdit'])->name('UsersEdit');
Route::delete('/users/eliminar/{id}',[UserController::class, 'UsersDelete'])->name('UsersDelete');


