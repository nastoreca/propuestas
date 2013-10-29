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

			$table->integer('id_invitado')->unsigned();
			$table->integer('id_opcion')->unsigned();
			
            $table->primary(array('id_invitado', 'id_opcion'));

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