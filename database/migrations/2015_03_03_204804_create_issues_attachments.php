<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesAttachments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('issue_id')->unsigned();
			$table->foreign('issue_id')->references('id')->on('issues');
			
			$table->string('path');
			
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
		Schema::drop('issues_attachments');
	}

}
