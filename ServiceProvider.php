<?php

namespace Printplanet\Component\Support;

use Printplanet\Component\Container\Container;

abstract class ServiceProvider
{
    /**
     * The application instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Create a new service provider instance.
     *
     * @param  Container $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param  string  $path
     * @param  string  $key
     * @return void
     */
    protected function mergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, array());

        $this->app['config']->set($key, array_merge(require $path, $config));
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    /**
     * Get the events that trigger this service provider to register.
     *
     * @return array
     */
    public function when()
    {
        return array();
    }

    /**
     * Determine if the provider is deferred.
     *
     * @return bool
     */
    public function isDeferred()
    {
        return $this->defer;
    }

    /**
     * Get a list of files that should be compiled for the package.
     *
     * @deprecated
     *
     * @return array
     */
    public static function compiles()
    {
        return array();
    }
}
