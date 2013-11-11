<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvitadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitados',function($table){

			$table->increments('id');

			$table->string('nombre', 30)->nullable();
			$table->string('apellidos', 40)->nullable();			
			$table->string('email', 30)->nullable();
			$table->string('telefono', 15)->nullable();

			$table->timestamps();

			$table->unique('email');			
		});			
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('invitados');
	}

}