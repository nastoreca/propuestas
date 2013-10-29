<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvitadoPropuestaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitado_propuesta',function($table){

			$table->integer('id_propuesta')->unsigned();
			$table->integer('id_invitado')->unsigned();
			
			$table->primary(array('id_propuesta', 'id_invitado'));

			$table->foreign('id_propuesta')
			      ->references('id')->on('propuestas')
			      ->onDelete('cascade')
			      ->onUpdate('no action');
			      
			$table->foreign('id_invitado')
			      ->references('id')->on('invitados')
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
		Schema::dropIfExists('invitado_propuesta');
	}

}