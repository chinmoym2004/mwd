<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewEmailVerificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verifiedemail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('email');
			$table->text('token');
			$table->boolean('status');
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
		Schema::drop('verifiedemail');
	}

}
