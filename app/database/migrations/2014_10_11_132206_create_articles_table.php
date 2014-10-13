<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles',function($table){
			$table->increments('id');
			$table->string('title',100);
			$table->string('category',100);
			$table->string('link',100)->unique();
			$table->integer('votes');
     		$table->timestamps(); 
     		$table->string('remember_token',100); 

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
