<?php namespace Cpr\Storage\Page;

interface PageRepository {

	public function all();

	public function find($slug);

	public function store($slug);

	public function update($slug);	

}