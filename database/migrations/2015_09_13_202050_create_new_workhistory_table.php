<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewWorkhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workhistory', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->string('emp_name');
			$table->string('emp_details');
			$table->string('from_year');
			$table->string('from_month');

			$table->string('to_year');
			$table->string('to_month');

			$table->string('job_title');
			$table->string('job_role');

			$table->string('team_size');

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
		Schema::drop('workhistory');
	}

}
