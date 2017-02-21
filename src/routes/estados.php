<?php

Route::group([
    'prefix' => config('cidades-brasil.routes_estados'),
    'as'     => config('cidades-brasil.routes_estados') . '.'
], function () {
    Route::name('all')
        ->get('all/{toArray?}', 'EstadosController@all');

    Route::name('buscarPorId')
        ->get('{id}', 'EstadosController@buscarPorId');

    Route::name('buscarPorUF')
        ->get('buscar_por_uf/{uf}', 'EstadosController@buscarPorUF');
});