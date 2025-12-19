<?php

Route::get('/', [CardapioController::class, 'index'])->name('cardapio.publico');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dias', [DiaSemanaController::class, 'index']);
    Route::post('dias', [DiaSemanaController::class, 'store']);
    Route::delete('dias/{diaSemana}', [DiaSemanaController::class, 'destroy']);

    Route::get('pratos', [PratoController::class, 'index']);
    Route::post('pratos', [PratoController::class, 'store']);
    Route::delete('pratos/{prato}', [PratoController::class, 'destroy']);

    Route::get('cardapios', [CardapioController::class, 'admin']);
    Route::post('cardapios', [CardapioController::class, 'store']);
});
