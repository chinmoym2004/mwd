<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewUniversityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('university', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("u_name");
			$table->text("u_details");
			$table->text('u_logo');
			$table->text('u_address');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('university');
	}

}
