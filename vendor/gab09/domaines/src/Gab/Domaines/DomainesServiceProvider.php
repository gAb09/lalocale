<?php namespace Gab\Domaines;

use Illuminate\Support\ServiceProvider;

class DomainesServiceProvider extends ServiceProvider {

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

		$app['domhelper'] = $app->share(function($app)
		{
			return new DomHelper;
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('domhelper');
	}

}