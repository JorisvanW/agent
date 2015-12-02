<?php namespace JorisvanW\Agent;

use Illuminate\Support\ServiceProvider;

class AgentServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/agent.php' => config_path('agent.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    
        $this->app['agent'] = $this->app->share(function ($app)
        {
            return new Agent($app['request']->server->all());
        });
    }

}
