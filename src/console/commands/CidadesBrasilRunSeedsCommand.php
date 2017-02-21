<?php
namespace L4ASistemas\CidadesBrasil\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use L4ASistemas\CidadesBrasil\Database\Seeds\CidadesBrasilTableSeeder;

class CidadesBrasilRunSeedsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cidades-brasil:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the Seenders';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('db:seed', [
            '--class' => CidadesBrasilTableSeeder::class
        ]);
    }

}