<?php

namespace Sonergia\AlfrescoLaravel;

use Illuminate\Support\ServiceProvider;
use Sonergia\AlfrescoLaravel\Models\AlfrescoService;

class AlfrescoLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //vistas
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'alfresco');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->bootConfig();
    }

    /**
     * Defines the boot configuration
     *
     * @return void
     */
    protected function bootConfig()
    {
        $path = __DIR__ . '/Config/alfresco.php';

        $this->mergeConfigFrom($path, 'alfresco');

        $this->publishes(
            [
                $path => config_path('alfresco.php')
            ],
            'Sonergia-alfresco'
        );
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->make('Sonergia\AlfrescoLaravel\Controllers\AlfrescoLaravelController');
        //$this->app->make('Sonergia\AlfrescoLaravel\Models\AlfrescoLaravel');

        //registro middleware
        //$this->app['router']->aliasMiddleware('alfresco-explorer', \Sonergia\AlfrescoLaravel\Middlewares\AlfrescoExplorer::class);
        $this->app->routeMiddleware(
            ['alfresco-explorer', \Sonergia\AlfrescoLaravel\Middlewares\AlfrescoExplorer::class]
        );

        $this->app->bind(
            'alfresco',
            function () {
                return new \Sonergia\AlfrescoLaravel\Models\AlfrescoService;
            }
        );


        //helpers
        foreach (glob(__DIR__ . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
