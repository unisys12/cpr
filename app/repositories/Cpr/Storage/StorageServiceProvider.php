<?php namespace Cpr\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Cpr\Storage\Page\PageRepository',
			'Cpr\Storage\Page\EloquentPageRepository',
			'Cpr\Storage\Facility\FacilityRepository',
			'Cpr\Storage\Facility\EloquentFacilityRespository',
			'Cpr\Storage\S3\s3interface',
			'Cpr\Storage\S3\s3'
		);
	}

}