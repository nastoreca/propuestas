<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvitadoOpcionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitado_opcion',function($table){

			$table->increments('id');

			$table->integer('id_invitado')->unsigned()->index();
			$table->integer('id_opcion')->unsigned()->index();
			
			$table->foreign('id_invitado')
			      ->references('id')->on('invitados')
			      ->onDelete('cascade')
			      ->onUpdate('no action');
			      
			$table->foreign('id_opcion')
			      ->references('id')->on('opciones')
			      ->onDelete('cascade')
			      ->onUpdate('no action');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('invitado_opcion');
	}

}