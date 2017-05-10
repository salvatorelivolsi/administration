<?php

namespace SnowLeopard\Administration;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Config;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(Router $router)
	{
		$this->loadRoutesFrom(__DIR__ . '/routes.php');
		$this->loadMigrationsFrom(__DIR__ . '/Migrations');
		$this->loadTranslationsFrom(__DIR__ . '/Lang', 'sl-admin');
		$this->loadViewsFrom(__DIR__ . '/Views', 'sl-admin');

		$this->viewComposer();

		/* TAG : public */
		$this->publishes(
			[ __DIR__ . '/public/' => public_path('assets/vendor/admin') ],
			'public'
		);

		/* TAG : config */
		$this->publishes(
			[ __DIR__ . '/config.php' => config_path('admin.php') ],
			'config'
		);

		/* TAG : migrations */
		$this->publishes(
			[ __DIR__ . '/database/migrations/' => database_path('migrations') ],
			'migrations'
		);

		/* TAG : views */
		$this->publishes(
			[ __DIR__ . '/resources/views' => resource_path('views/vendor/admin') ],
			'views'
		);

		$this->configMerge();

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->mergeConfigFrom(__DIR__ . '/config.php', 'sl-admin');

		$config = require(__DIR__ . '/config-load.php');
		foreach ($config['providers'] as $provider) {
			$this->app->register($provider);
		}

		foreach ($config['aliases'] as $key => $alias) {
			$this->app->alias($key, $alias);
		}
	}

	private function viewComposer()
	{
		/*
		view()->composer('*', function ($view) {
			$menu = new MenuManager();
			$view->with('_navbar_left_menu', $menu);
		});
		*/

	}

	/**
	 *  Add new guard
	 */
	private function configMerge()
	{
		Config::set(
			'auth.guards',
			array_merge(
				config('auth.guards'),
				[
					'admin' => [
						'driver'   => 'session',
						'provider' => 'admins',
					],
				]
			)
		);

		Config::set(
			'auth.providers',
			array_merge(
				config('auth.providers'),
				[
					'admins' => [
						'driver' => 'eloquent',
						'model'  => Models\Admin::class,
					],
				]
			)
		);

		Config::set(
			'auth.passwords',
			array_merge(
				config('auth.passwords'),
				[
					'admins' => [
						'provider' => 'admins',
						'table'    => 'password_resets',
						'expire'   => 60,
					],
				]
			)
		);
	}
}
