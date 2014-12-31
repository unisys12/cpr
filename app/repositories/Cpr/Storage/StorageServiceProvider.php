<?php namespace Cpr\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Cpr\Storage\Page\PageRepository',
			'Cpr\Storage\Page\EloquentPageRepository'
		);
	}

}