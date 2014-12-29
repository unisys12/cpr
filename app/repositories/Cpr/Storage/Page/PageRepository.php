<?php namespace Cpr\Storage\Page;

interface PageRepository {

	public function all();

	public function find($slug);

	public function create($slug);

	public function update($slug);	

}