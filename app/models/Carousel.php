<?php

class Carousel extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'carousel';

	/**
	 * Columns used for dates
	 *
	 * @var date
	 */
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	/**
	 * Guarded Attributes of the Model
	 *
	 * @var string
	 */
	protected $guarded = ['_token'];

	/**
	 * Validate Method to inspect your inputs
	 * 
	 * @var string
	 *
	 * @return bool
	 */
	public function validate($input)
	{

		$rules = [

		'name'					=>	'required|min:5|unique:facilities',
		'description'			=>	'required|min:10|max:255',
		'image_1_description'	=> 	'required|min:5|max:25',
		'image_2_description'	=> 	'required|min:5|max:25',
		'image_3_description'	=> 	'required|min:5|max:25',

		];

		$attempt = Validator::make($input, $rules);

		return $attempt;

	}
	
}