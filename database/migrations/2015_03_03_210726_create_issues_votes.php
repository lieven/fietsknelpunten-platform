<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesVotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_votes', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('issue_id')->unsigned();
			$table->foreign('issue_id')->references('id')->on('issues');
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			
			$table->string('ip_created');
			
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
		Schema::drop('issues_votes');
	}

}
