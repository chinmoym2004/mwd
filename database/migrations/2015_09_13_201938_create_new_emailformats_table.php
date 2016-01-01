<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewEmailformatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emailformats', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('email_type');
			$table->string('email_subject');
			$table->string('email_format');
			$table->string('template_file');
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
		Schema::drop('emailformats');
	}

}
