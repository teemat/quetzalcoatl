<?php
/**
 * QuetzalcoatlServiceProvider.php
 * Created by anonymous on 12/01/16 21:28.
 */

namespace Teemat\Quetzalcoatl;

use Illuminate\Support\ServiceProvider;

class QuetzalcoatlServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Find path to the package
        $componenentsFileName = with(new ReflectionClass('\Teemat\Quetzalcoatl\QuetzalcoatlServiceProvider'))->getFileName();
        $componenentsPath     = dirname($componenentsFileName);

        $this->loadViewsFrom($componenentsPath . '/../views', 'quetzalcoatl');

        // include $componenentsPath . '/../routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
