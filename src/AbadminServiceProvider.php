<?php namespace webvolant\abadmin;

use Illuminate\Support\ServiceProvider;


class AbadminServiceProvider extends ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/../views', 'abadmin');

        $this->publishes([
            __DIR__.'/../public/' => public_path('webvolant/abadmin'),
        ], 'public');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('config.php'),
        ], 'config'); //config('config.path');

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('/migrations')
        ], 'migrations');

        /*
         * Register the service provider for the dependency.
         */
        $this->app->register('\Collective\Html\HtmlServiceProvider');
        /*
         * Create aliases for the dependency.
         */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Form', 'Collective\Html\FormFacade');
        $loader->alias('Html', 'Collective\Html\HtmlFacade');

        //$this->app->make('webvolant\abadmin\LoginController');
        //$this->app->make('webvolant/abadmin');
        include __DIR__ . '/routes.php';
    }



    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        //$this->registerConfig();
        $this->loadViewsFrom(__DIR__.'/../views', 'abadmin');

        //$this->registerConfig();
        //$this->mergeConfigFrom(
        //    __DIR__.'/../config/config.php', 'abadmin'
        //);

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'config'
        );
/*
        $this->app->bind('path.public', function() {
            return base_path().'/public';
        });
*/
    }

    protected function registerConfig()
    {

        //$this->publishes([$configPath => config_path('config.php')], 'config');
    }

}