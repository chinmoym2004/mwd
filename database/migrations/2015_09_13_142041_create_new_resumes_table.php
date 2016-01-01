<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewResumesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumes', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('user_id')->unsigned();
			$table->string('resume_link');
			$table->string('file_type');
			$table->string('file_size');
			$table->boolean('isactive');

			$table->softDeletes();
			$table->timestamps();

			$table->index('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumes');
	}

}
