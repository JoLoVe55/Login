<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\usuariosController;
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

Route::get('/tabla', [usuariosController::class, 'tabla'])->middleware('auth')->name('usuarios');

Route::get('/tabla/{id}', [usuariosController::class, 'show'])->middleware('auth')->name('show');

Route::post('/tabla', [usuariosController::class, 'store'])->middleware('auth')->name('store');

Route::get('/tabla/{id}/edit', [usuariosController::class,'edit'])->middleware('auth')->name('edit');

Route::get('/nuevo-usuario', [usuariosController::class, 'create'])->middleware('auth')->name('crear');

Route::put('/tabla/{id}/', [usuariosController::class, 'update'])->middleware('auth')->name('update');

//login controllers 

Route::get('/login', [loginController::class, 'index'])->name('index.login');

Route::get('/login/logout', [loginController::class,'logout'])->name('logout.login');

Route::get('/login/signin', [loginController::class, 'signin'])->name('signin.login');

Route::post('/login', [loginController::class, 'login'])->name('login.login');

Route::post('/login/signin', [loginController::class, 'register'])->name('register.login');