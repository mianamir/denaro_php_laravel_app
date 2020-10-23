<?php namespace Matriphe\Imageupload;

use Illuminate\Support\ServiceProvider;

class ImageuploadServiceProvider extends ServiceProvider {

	protected $defer = false;

	public function boot()
	{
		$this->mergeConfigFrom( __DIR__.'/../../config/config.php', 'imageupload');

        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('imageupload.php'),
        ]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['imageupload'] = $this->app->share(function($app)
        {
            return new Imageupload();
        });
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
