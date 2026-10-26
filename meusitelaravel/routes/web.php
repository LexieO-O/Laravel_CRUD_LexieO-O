<?php

use App\Http\Controllers\PessoaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

return view('welcome');

});

Route::get('/ola', [PessoaController::class, 'ola']);

Route::post('/saudar', [PessoaController::class, 'saudar'])->name('pessoa.saudar');

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');

Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');

Route::get('/pessoas/{pessoa}/editar', [PessoaController::class, 'edit'])->name('pessoas.edit');

Route::put('/pessoas/{pessoa}', [PessoaController::class, 'update'])->name('pessoas.update');

Route::delete('/pessoas/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoas.destroy');
