<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\MultimediaController;


Route::get('/', function(){
    return view('home');
});
// Route::get('/registro',[RegistroController::class, 'create'])->name('registro.index');
// Route::get('/login',[LoginController::class, 'create'])->name('login.index');

Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/create', [UsuarioController::class, 'create']);
Route::delete('usuario/{usuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');

Route::get('temas', [TemaController::class, 'index'])->name('temas.index');
Route::post('temas', [TemaController::class, 'store'])->name('temas.store');
Route::get('temas/create', [TemaController::class, 'create']);
Route::delete('tema/{tema}', [TemaController::class, 'destroy'])->name('tema.destroy');
Route::get('temas/{tema}', [TemaController::class, 'show'])->name('tema.show');

Route::get('seccions', [SeccionController::class, 'index'])->name('seccions.index');
Route::post('seccions', [SeccionController::class, 'store'])->name('seccions.store');
Route::get('seccions/create', [SeccionController::class, 'create']);
Route::delete('seccion/{seccion}', [SeccionController::class, 'destroy'])->name('seccion.destroy');
Route::get('seccions/{seccion}', [SeccionController::class, 'show'])->name('seccion.show');

Route::get('actividads', [ActividadController::class, 'index'])->name('actividads.index');
Route::post('actividads', [ActividadController::class, 'store'])->name('actividads.store');
Route::get('actividads/create', [ActividadController::class, 'create']);
Route::delete('actividad/{actividad}', [ActividadController::class, 'destroy'])->name('actividad.destroy');
Route::get('actividads/{actividad}', [ActividadController::class, 'show'])->name('actividad.show');

Route::get('tipos', [TipoController::class, 'index'])->name('tipos.index');
Route::post('tipos', [TipoController::class, 'store'])->name('tipos.store');
Route::get('tipos/create', [TipoController::class, 'create']);
Route::delete('tipo/{tipo}', [TipoController::class, 'destroy'])->name('tipo.destroy');
Route::get('tipos/{tipo}', [TipoController::class, 'show'])->name('tipo.show');

Route::get('multimedias', [MultimediaController::class, 'index'])->name('multimedias.index');
Route::post('multimedias', [MultimediaController::class, 'store'])->name('multimedias.store');
Route::get('multimedias/create', [MultimediaController::class, 'create']);
Route::delete('multimedia/{multimedia}', [MultimediaController::class, 'destroy'])->name('multimedia.destroy');
Route::get('multimedias/{multimedia}', [MultimediaController::class, 'show'])->name('multimedia.show');
