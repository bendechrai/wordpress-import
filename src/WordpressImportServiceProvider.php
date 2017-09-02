<?php

namespace BenDechrai\WordpressImport;

use Illuminate\Support\ServiceProvider;
use BenDechrai\WordpressImport\Command\WordpressImportCommand;

class WordpressImportServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.wpimport', function () {
            return new WordpressImportCommand;
        });

        $this->commands(['command.wpimport']);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.wpimport'];
    }
}
