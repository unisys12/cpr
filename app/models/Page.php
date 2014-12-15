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

}