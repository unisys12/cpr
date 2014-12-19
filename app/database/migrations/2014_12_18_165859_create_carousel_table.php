<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carousel', function($table)
		{
			$table->increments('id');
			$table->string('title')->unique();
			$table->string('slug')->unique();
			$table->text('description');
			$table->string('image_1');
			$table->string('image_1_description');
			$table->string('image_2');
			$table->string('image_2_description');
			$table->string('image_3');
			$table->string('image_3_description');
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
		Schema::drop('carousel');
	}

}
