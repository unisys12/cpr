<?php namespace Cpr\Storage\Facility;

use Facility;

class EloquentFacilityRespository implements FacilityRepository {

	public function all()
	{
		return Facility::all();
	}

	public function find($slug)
	{
		return Facility::where('slug', $slug)->get();
	}

	public function store($input)
	{
		return Facility::create($input);
	}

	public function update($input)
	{
		return Facility::save($input);
	}

}