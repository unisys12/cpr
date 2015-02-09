<?php

class Staff extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table to be used by the model
	 *
	 * @var string
	 */
	protected $table = 'staff';

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

		'name'		=>	'required|min:5',
		'title'		=>	'required|min:5|max:25',
		'email'		=> 	'required|email|min:5',
		'summary'	=> 	'required|min:5',

		];

		$attempt = Validator::make($input, $rules);

		return $attempt;

	}


}