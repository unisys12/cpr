<?php

class Facility extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'facilities';

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
	 * Method used for validation of form related to Facities
	 * 
	 * @var array
	 */
	public function validate($input)
	{
		$rules = [
			'name'					=>	'required|min:5',
			'description'			=>	'required|min:10|max:255',
			'image_1_description'	=> 	'required|min:5|max:50',
			'image_2_description'	=> 	'required|min:5|max:50'
		];

		$attempt = Validator::make($input, $rules);

		return $attempt;
	}


}