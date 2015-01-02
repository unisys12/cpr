<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facilities', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->text('description');
			$table->string('image_1');
			$table->string('image_1_description');
			$table->string('image_2');
			$table->string('image_2_description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facilities');
	}

}
