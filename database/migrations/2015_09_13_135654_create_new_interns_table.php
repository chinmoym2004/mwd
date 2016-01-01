<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewInternsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interns', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('title');
			$table->string('desc');
			
			$table->string('salary_details');
			
			$table->string('accomodation');

			$table->integer('no_of_candidate');

			$table->integer('user_id')->unsigned();

			$table->string('require_skill');
			$table->string('location');
			
			$table->boolean('verified')->default(0);

			$table->softDeletes();
			$table->timestamps();

			$table->index('title');
			$table->index('desc');
			$table->index('require_skill');
			$table->index('location');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('interns');
	}

}
