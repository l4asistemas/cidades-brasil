<?php

Route::group([
    'prefix' => config('cidades-brasil.routes_cidades'),
    'as'     => config('cidades-brasil.routes_cidades') . '.'
], function () {
    Route::name('all')
        ->get('all/{toArray?}', 'CidadesController@all');

    Route::name('buscarPorId')
        ->get('{id}', 'CidadesController@buscarPorId');

    Route::name('buscarPorEstadoId')
        ->get('buscar_por_estado_id/{estadoId}/{toArray?}', 'CidadesController@buscarPorEstadoId');

    Route::name('buscarPorUF')
        ->get('buscar_por_uf/{uf}/{toArray?}', 'CidadesController@buscarPorUF');

    Route::name('buscarPorCodigoEstado')
        ->get('buscar_por_codigo_estado/{codigoEstado}/{toArray?}', 'CidadesController@buscarPorCodigoEstado');
});