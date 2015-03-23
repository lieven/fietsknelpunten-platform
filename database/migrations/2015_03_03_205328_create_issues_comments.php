<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_comments', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('issue_id')->unsigned();
			$table->foreign('issue_id')->references('id')->on('issues');
			
			$table->enum('type', [ 'comment', 'official_comment' ]);
			
			$table->text('text');
			
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
		Schema::drop('issues_comments');
	}

}
