<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('usuario.index');
});

Route::resource('usuario', UsuarioController::class);

Route::get('usuario/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');

Route::post('/endereco/{usuario}', [UsuarioController::class, 'storeEndereco'])->name('usuario.storeEndereco');
Route::get('/endereco/{usuario}', [UsuarioController::class, 'createEndereco'])->name('usuario.createEndereco');

Route::get('/endereco/edit/{endereco}', [UsuarioController::class, 'editEndereco'])->name('usuario.editEndereco');
Route::put('/endereco/edit/{endereco}', [UsuarioController::class, 'updateEndereco'])->name('usuario.updateEndereco');
