<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->string('title');
			$table->string('slug');
			$table->text('excerpt');
			$table->text('content');
			$table->tinyInteger('active');
			$table->integer('sort');
			$table->timestamp('published_at');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->timestamp('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
