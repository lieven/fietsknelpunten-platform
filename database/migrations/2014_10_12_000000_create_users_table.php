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
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('firstname')->nullable();
			$table->string('lastname')->nullable();
			$table->enum('role', [ 'user', 'admin' ])->default('user');
			$table->string('location_country_code')->nullable();
			$table->string('location_city_name')->nullable();
			$table->string('location_city_zip')->nullable();
			$table->string('location_street_name')->nullable();
			$table->string('location_street_no')->nullable();
			$table->string('phone')->nullable();
			$table->string('ip_created');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
