<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->uniqid();
			$table->string('email')->unique();
			$table->enum('role',['admin','employee','employeer']);
			$table->string('password', 60);

			$table->boolean('phone_verified')->default(0);			
			$table->boolean('email_verified')->default(0);
			$table->boolean('profile_verified')->default(0);

			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();

			$table->index('username');
			$table->index('email');
			$table->index('role');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
