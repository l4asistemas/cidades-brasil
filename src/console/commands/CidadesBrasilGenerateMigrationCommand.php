<?php
namespace L4ASistemas\CidadesBrasil\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class CidadesBrasilGenerateMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cidades-brasil:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the Migration';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $estadosTable = Config::get('cidades-brasil.estados_table');
        $cidadesTable = Config::get('cidades-brasil.cidades_table');

        if ($this->confirm('Gerar migração de Cidades e Estados Brasileiros? [yes|no]', 'yes')) {
            $this->info("Gerando migração...");
            if ($this->createMigration($estadosTable, $cidadesTable)) {
                $this->info("Migração criada com sucesso!");
            } else {
                $this->error(
                    "Não foi possível criar a migração.\n Por favor cheque as permissões de escrita".
                    " no diretório database/migrations."
                );
            }
            $this->line('');
        }
    }

    private function createMigration($estadosTable, $cidadesTable)
    {
        $migrationFile = base_path("/database/migrations")."/".date('Y_m_d_His')."_cidades_brasil_setup_tables.php";

        $output = $this->laravel->view->make('cidades-brasil::migration', compact(
            'estadosTable', 'cidadesTable'
        ))->render();

        if (!file_exists($migrationFile) && $fs = fopen($migrationFile, 'x')) {
            fwrite($fs, $output);
            fclose($fs);
            return true;
        }

        return false;
    }
}