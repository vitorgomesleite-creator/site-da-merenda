<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemanaController;
use App\Http\Controllers\PratoController;
use App\Http\Controllers\CardapioController;

/*
|--------------------------------------------------------------------------
| SITE (PÚBLICO)
|--------------------------------------------------------------------------
| Exibe o cardápio semanal
*/
Route::get('/', [CardapioController::class, 'index'])
    ->name('welcome');

/*
|--------------------------------------------------------------------------
| SEMANA (CRUD SIMPLES)
|--------------------------------------------------------------------------
*/
Route::get('/semana', [SemanaController::class, 'listar'])
    ->name('semana.listar');

Route::get('/semana/cadastrar', [SemanaController::class, 'cadastrar'])
    ->name('semana.cadastrar');

Route::post('/semana/salvar', [SemanaController::class, 'salvar'])
    ->name('semana.salvar');

/*
|--------------------------------------------------------------------------
| PRATOS (CRUD SIMPLES)
|--------------------------------------------------------------------------
*/
Route::get('/pratos', [PratoController::class, 'listar'])
    ->name('pratos.listar');

Route::get('/pratos/cadastrar', [PratoController::class, 'cadastrar'])
    ->name('pratos.cadastrar');

Route::post('/pratos/salvar', [PratoController::class, 'salvar'])
    ->name('pratos.salvar');

/*
|--------------------------------------------------------------------------
| CARDÁPIO (RELACIONAMENTO)
|--------------------------------------------------------------------------
*/
Route::get('/cardapios', [CardapioController::class, 'listar'])
    ->name('cardapio.listar');

Route::get('/cardapios/cadastrar', [CardapioController::class, 'cadastrar'])
    ->name('cardapio.cadastrar');

Route::post('/cardapios/salvar', [CardapioController::class, 'salvar'])
    ->name('cardapio.salvar');
