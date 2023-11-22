<?php

use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('usuario.index');
});

Route::resource('usuario', UsuarioController::class);

Route::get('usuario/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');

Route::post('/endereco/{usuario}', [EnderecoController::class, 'store'])->name('endereco.store');
Route::get('/endereco/{usuario}', [EnderecoController::class, 'create'])->name('endereco.create');

Route::get('/endereco/edit/{endereco}/{usuario}', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::put('/endereco/edit/{endereco}/{usuario}', [EnderecoController::class, 'update'])->name('endereco.update');

