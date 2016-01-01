<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewAppliedJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applied_jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_id')->unsinged();
			$table->integer('user_id')->unsinged();
			$table->enum('status',['pending','shorted','selected','rejected']);

			$table->softDeletes();
			$table->timestamps();

			$table->index('user_id');
			$table->index('job_id');
			$table->index('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applied_jobs');
	}

}
