<?php
namespace L4ASistemas\CidadesBrasil\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class CidadesController extends BaseController
{
    protected $table;
    protected $tableEstados;

    public function __construct()
    {
        $this->table = Config::get('cidades-brasil.cidades_table');
        $this->tableEstados = Config::get('cidades-brasil.estados_table');
    }

    public function all($toArray = false)
    {
        $cidades = DB::table($this->table)->get();

        if ($toArray) {
            $cidades = $cidades->pluck('nome', 'id');
        }

        return $cidades;
    }

    public function buscarPorId($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function buscarPorEstadoId($estadoId, $toArray = false)
    {
        $estado = DB::table($this->tableEstados)->where('id', $estadoId)->first();

        $cidades = collect();

        if (!is_null($estado)) {
            $cidades = DB::table($this->table)->where('codigo_uf_ibge', $estado->codigo_uf_ibge)->get();
        }

        if ($toArray) {
            $cidades = $cidades->pluck('nome', 'id');
        }

        return $cidades;
    }

    public function buscarPorUF($uf, $toArray = false)
    {
        $estado = DB::table($this->tableEstados)->where('uf', strtolower($uf))->first();

        $cidades = collect();

        if (!is_null($estado)) {
            $cidades = DB::table($this->table)->where('codigo_uf_ibge', $estado->codigo_uf_ibge)->get();
        }

        if ($toArray) {
            $cidades = $cidades->pluck('nome', 'id');
        }

        return $cidades;
    }

    public function buscarPorCodigoEstado($codigoEstado, $toArray = false)
    {
        $estado = DB::table($this->tableEstados)->where('codigo_uf_ibge', $codigoEstado)->first();

        $cidades = collect();

        if (!is_null($estado)) {
            $cidades = DB::table($this->table)->where('codigo_uf_ibge', $estado->codigo_uf_ibge)->get();
        }

        if ($toArray) {
            $cidades = $cidades->pluck('nome', 'id');
        }

        return $cidades;
    }
}