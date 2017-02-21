<?php
namespace L4ASistemas\CidadesBrasil;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use L4ASistemas\CidadesBrasil\Console\Commands\CidadesBrasilGenerateMigrationCommand;
use L4ASistemas\CidadesBrasil\Console\Commands\CidadesBrasilRunSeedsCommand;

class CidadesBrasilServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configFile = __DIR__ . '/../config/cidades-brasil.php';

        $this->publishes([
            $configFile => config_path('cidades-brasil.php')
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                CidadesBrasilGenerateMigrationCommand::class,
                CidadesBrasilRunSeedsCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mapCidadesRoutes();
        $this->mapEstadosRoutes();
        $this->registerViews();
    }

    protected function mapCidadesRoutes()
    {
        Route::middleware('web')
            ->namespace('L4ASistemas\CidadesBrasil\Controllers')
            ->group(__DIR__.'/routes/cidades.php');
    }

    protected function mapEstadosRoutes()
    {
        Route::middleware('web')
            ->namespace('L4ASistemas\CidadesBrasil\Controllers')
            ->group(__DIR__.'/routes/estados.php');
    }

    /**
     * Register views
     *
     * @return void
     */
    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources', 'cidades-brasil');
    }
}