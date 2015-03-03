<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesHistory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_history', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('issue_id')->unsigned();
			$table->foreign('issue_id')->references('id')->on('issues');
			
			$table->enum('type', [ 'comment', 'label_add', 'label_remove', 'status_close', 'status_open' ]);
			$table->integer('item_id')->unsigned();
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			
			$table->string('ip_created');
			$table->timestamps();
			$table->timestamp('date_updated');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues_history');
	}

}
