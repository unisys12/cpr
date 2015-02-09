<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('staff', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('email');
			$table->text('summary');
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
		
		Schema::drop('staff');

	}

}
