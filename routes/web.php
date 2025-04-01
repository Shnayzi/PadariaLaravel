<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::prefix("/api")->group(function(){

    Route::get('/produtos', function(){
    return 'Produtos';
    });
    Route::get('/login', function(){
    return 'Login';
    });
    Route::get('/fornecedores', function(){
    return 'Fornecedores';
    });
});

Route::fallback(function(){
	echo 'A rota não existe.
	<a href="/">Clique aqui</a>
	para ir para página inicial';
});