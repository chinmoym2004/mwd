<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('fname');
			$table->string('lname');
			$table->string('dob');
			$table->string('summary');
			
			$table->string('phone');			
			$table->string('contact_email');

			$table->string('website');

			$table->string('c_address1');
			$table->string('c_address2');
			$table->string('c_city');
			$table->string('c_zip');
			$table->string('c_state');
			$table->string('c_country');

			$table->string('p_address1');
			$table->string('p_address2');
			$table->string('p_city');
			$table->string('p_zip');
			$table->string('p_state');
			$table->string('p_country');

			$table->string('skills');

			$table->string('location_preferred');
			$table->string('profile_pics');

			$table->string('fb_link');
			$table->string('gplus_link');
			$table->string('linkedin_link');
			$table->string('twitter_link');
			$table->string('tmblr_link');

			$table->timestamps();
			$table->softDeletes();

			$table->index('user_id');
			$table->index('skills');
			$table->index('location_preferred');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile');
	}

}
