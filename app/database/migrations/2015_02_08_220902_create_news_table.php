<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('news', function($table)
		{

			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('header');
			$table->text('content');
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
	
		Schema::drop('news');

	}

}
