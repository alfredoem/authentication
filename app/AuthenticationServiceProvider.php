<?php namespace Alfredoem\Authentication;

/**
 *
 * @author Alfredo Espiritu <alfredo.espiritu.m@gmail.com>
 */

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

use Alfredoem\Authentication\Console\Install;


class AuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->app->booted(function() {
            $this->defineRoutes();
        });

        $this->defineResources();
    }

    protected function defineRoutes()
    {
        if (! $this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => 'Alfredoem\Authentication\Http\Controllers'], function($router) {
               require __DIR__ . '/Http/routes.php';
            });
        }
    }

    protected function defineResources()
    {
        $this->loadViewsFrom(AUTH_PATH . '/resources/views', 'Authentication');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                AUTH_PATH . '/resources/views' => base_path('resources/views/vendor/Authentication'),
            ]);

            $this->publishes([
                AUTH_PATH . '/resources/views' => base_path('resources/views/vendor/Authentication'),
            ]);
        }
    }

    public function register()
    {
        if (! defined('AUTH_PATH')) {
            define('AUTH_PATH', realpath(__DIR__ . '/../'));
        }

        if ($this->app->runningInConsole()) {
            $this->commands([Install::class]);
        }
    }

}









