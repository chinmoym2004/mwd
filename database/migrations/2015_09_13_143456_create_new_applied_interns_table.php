<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewAppliedInternsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applied_interns', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('intern_id')->unsinged();
			$table->integer('user_id')->unsinged();
			$table->enum('status',['pending','shorted','selected','rejected']);

			$table->softDeletes();

			$table->timestamps();
			
			$table->index('user_id');
			$table->index('intern_id');
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
		Schema::drop('applied_interns');
	}

}
