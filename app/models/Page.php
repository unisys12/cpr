<?php

class Page extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

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

		'title'		=>	'required|min:5|unique:facilities',
		'slug'		=>	'required|min:10|max:255',
		'header'	=> 	'required|min:5|max:25',
		'content'	=> 	'required|min:5|max:25',

		];

		$attempt = Validator::make($input, $rules);

		return $attempt;

	}

}