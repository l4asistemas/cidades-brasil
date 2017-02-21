<?php
namespace L4ASistemas\CidadesBrasil\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class EstadosController extends BaseController
{
    protected $table;

    public function __construct()
    {
        $this->table = Config::get('cidades-brasil.estados_table');
    }

    public function all($toArray = false)
    {
        $estados = DB::table($this->table)->get();

        if ($toArray) {
            $estados = $estados->pluck('nome', 'id');
        }

        return $estados;
    }

    public function buscarPorId($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function buscarPorUF($uf)
    {
        return DB::table($this->table)->where('uf', strtolower($uf))->first();
    }
}