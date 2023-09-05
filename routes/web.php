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

// Route::get('logins', [LoginController::class, 'index'])->name('logins.index');
// Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
// Route::get('logins/login', [LoginController::class, 'login']);
// Route::delete('login/{login}', [LoginController::class, 'destroy'])->name('logins.destroy');
// Route::get('logins/{login}', [LoginController::class, 'show'])->name('logins.show');


 
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/create', [CursoController::class, 'create']);
Route::delete('curso/{curso}', [CursoController::class, 'destroy'])->name('curso.destroy');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('curso.show');
