<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 255);
			$table->text('description');
			
			$table->double('location_coords_lat', 15, 8);
			$table->double('location_coords_lon', 15, 8);
			
			$table->string('location_country_code', 2);
			$table->string('location_city_name', 255);
			$table->string('location_street_name', 255);
			$table->string('location_street_number', 20);
			
			$table->integer('author_user_id')->unsigned();
			$table->foreign('author_user_id')->references('id')->on('users');
			
			$table->integer('comment_count')->unsigned()->default(0);
			$table->integer('vote_count')->unsigned()->default(0);
			
			$table->enum('status', [ 'open', 'closed' ]);
			
			$table->string('ip_created');
			
			$table->timestamps(); // created_at, updated_at
			
			$table->timestamp('date_last_commented')->nullable();
			$table->timestamp('date_last_voted')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues');
	}

}
