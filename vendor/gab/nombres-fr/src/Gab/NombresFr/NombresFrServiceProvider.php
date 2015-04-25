<?php namespace Gab\NombresFr;

use Illuminate\Support\ServiceProvider;

class NombresFrServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$app['nombresfr'] = $app->share(function($app)
		{
			return new NombresFr;
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('nombresfr');
	}

}