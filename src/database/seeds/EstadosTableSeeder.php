<?php
namespace L4ASistemas\CidadesBrasil\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    public function run()
    {
        $estadosTable = Config::get('cidades-brasil.estados_table');

        DB::table($estadosTable)->insert([
            'UF'             => 'AC',
            'nome'           => 'Acre',
            'codigo_uf_ibge' => 12,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'AL',
            'nome'           => 'Alagoas',
            'codigo_uf_ibge' => 27,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'AM',
            'nome'           => 'Amazonas',
            'codigo_uf_ibge' => 13,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'AP',
            'nome'           => 'Amapá',
            'codigo_uf_ibge' => 16,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'BA',
            'nome'           => 'Bahia',
            'codigo_uf_ibge' => 29,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'CE',
            'nome'           => 'Ceará',
            'codigo_uf_ibge' => 23,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'DF',
            'nome'           => 'Distrito Federal',
            'codigo_uf_ibge' => 53,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'ES',
            'nome'           => 'Espírito Santo',
            'codigo_uf_ibge' => 32,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'GO',
            'nome'           => 'Goiás',
            'codigo_uf_ibge' => 52,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'MA',
            'nome'           => 'Maranhão',
            'codigo_uf_ibge' => 21,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'MG',
            'nome'           => 'Minas Gerais',
            'codigo_uf_ibge' => 31,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'MS',
            'nome'           => 'Mato Grosso Do Sul',
            'codigo_uf_ibge' => 50,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'MT',
            'nome'           => 'Mato Grosso',
            'codigo_uf_ibge' => 51,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'PA',
            'nome'           => 'Pará',
            'codigo_uf_ibge' => 15,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'PB',
            'nome'           => 'Paraíba',
            'codigo_uf_ibge' => 25,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'PE',
            'nome'           => 'Pernambuco',
            'codigo_uf_ibge' => 26,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'PI',
            'nome'           => 'Piauí',
            'codigo_uf_ibge' => 22,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'PR',
            'nome'           => 'Paraná',
            'codigo_uf_ibge' => 41,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'RJ',
            'nome'           => 'Rio De Janeiro',
            'codigo_uf_ibge' => 33,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
        DB::table($estadosTable)->insert([
            'UF'             => 'RN',
            'nome'           => 'Rio Grande Do Norte',
            'codigo_uf_ibge' => 24,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'RO',
            'nome'           => 'Rondônia',
            'codigo_uf_ibge' => 11,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'RR',
            'nome'           => 'Roraima',
            'codigo_uf_ibge' => 14,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'RS',
            'nome'           => 'Rio Grande Do Sul',
            'codigo_uf_ibge' => 43,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'SC',
            'nome'           => 'Santa Catarina',
            'codigo_uf_ibge' => 42,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'SE',
            'nome'           => 'Sergipe',
            'codigo_uf_ibge' => 28,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'SP',
            'nome'           => 'São Paulo',
            'codigo_uf_ibge' => 35,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);

        DB::table($estadosTable)->insert([
            'UF'             => 'TO',
            'nome'           => 'Tocantis',
            'codigo_uf_ibge' => 17,
            "created_at"     => Carbon::now(),
            "updated_at"     => Carbon::now()
        ]);
    }
}