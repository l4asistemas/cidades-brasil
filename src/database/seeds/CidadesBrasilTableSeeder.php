<?php
namespace L4ASistemas\CidadesBrasil\Database\Seeds;

use Illuminate\Database\Seeder;

class CidadesBrasilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
    }
}