<?php namespace Cpr\Storage\Facility;

interface FacilityRepository {

	public function all();

	public function find($slug);

	public function store($slug);

	public function update($slug);	

}