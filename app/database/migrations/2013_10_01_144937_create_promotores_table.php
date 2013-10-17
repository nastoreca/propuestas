<?php

use Illuminate\Database\Migrations\Migration;

class CreatePromotoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotores',function($table){

			$table->increments('id');

			$table->string('email', 30)->nullable();
			$table->string('password', 20)->nullable();			
			$table->string('nombre', 30)->nullable();
			$table->string('apellidos', 40)->nullable();

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
		Schema::dropIfExists('promotores');
	}

}