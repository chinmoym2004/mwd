<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('desc');
			$table->enum('type',['fulltime','parttime','contract']);
			
			$table->string('down_salary');
			$table->string('up_salary');
			
			$table->string('down_exp');
			$table->string('up_exp');

			$table->integer('no_of_candidate');

			$table->integer('user_id')->unsigned();

			$table->integer('category_id')->unsigned();
			$table->integer('subcategory_id')->unsigned();

			$table->string('require_skill');
			$table->string('location');
			
			$table->boolean('verified')->default(0);

			$table->softDeletes();
			$table->timestamps();

			$table->index('title');
			$table->index('desc');
			$table->index('down_exp');
			$table->index('up_exp');
			$table->index('category_id');
			$table->index('subcategory_id');
			$table->index('require_skill');
			$table->index('location');
			$table->index('type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}
