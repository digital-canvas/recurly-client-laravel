<?php namespace DigitalCanvas\Recurly;

use Illuminate\Support\ServiceProvider;
use \Recurly_Client;
use \Recurly_js;

class RecurlyServiceProvider extends ServiceProvider {

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
		$this->package('digital-canvas/recurly-client-laravel', __DIR__.'/../../config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['config']->package('digital-canvas/recurly-client-laravel', __DIR__.'/../../config');
        Recurly_Client::$subdomain = $this->app['config']->get('recurly-client-laravel::config.subdomain', null);
        Recurly_Client::$apiKey = $this->app['config']->get('recurly-client-laravel::config.apiKey', null);
        Recurly_js::$privateKey = $this->app['config']->get('recurly-client-laravel::config.privateKey', null);
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

}
