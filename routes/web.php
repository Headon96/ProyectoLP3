<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\HomeController;
use app\models\User;
use app\models\publicacion;
use app\models\mensajes;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'perfil'])->name('perfil');
Route::get('/mensajes', [App\Http\Controllers\HomeController::class, 'mensajes'])->name('mensajes');

Route::get('/editar', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar');
Route::post('/editarPerfil', [App\Http\Controllers\HomeController::class, 'editarPerfil'])->name('editarPerfil');


Route::get('/publicaciones', [App\Http\Controllers\HomeController::class, 'publicaciones'])->name('publicaciones');
Route::post('/publicaciones', [App\Http\Controllers\HomeController::class, 'c_publicaciones'])->name('publicaciones');