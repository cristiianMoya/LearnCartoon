<?php

use App\Http\Controllers\OperacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;

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

// Route::get('logins', [LoginController::class, 'index'])->name('logins.index');
// Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
// Route::get('logins/login', [LoginController::class, 'login']);
// Route::delete('login/{login}', [LoginController::class, 'destroy'])->name('logins.destroy');
// Route::get('logins/{login}', [LoginController::class, 'show'])->name('logins.show');


 
Route::get('logins', [LoginController::class, 'index'])->name('logins.index');
Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
Route::get('logins/create', [LoginController::class, 'create']);
Route::delete('login/{login}', [LoginController::class, 'destroy'])->name('login.destroy');
Route::get('logins/{login}', [LoginController::class, 'show'])->name('login.show');

Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/create', [UsuarioController::class, 'create']);
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');