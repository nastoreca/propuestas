<?php

use Illuminate\Database\Migrations\Migration;

class CreateInvitadoPromotorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitado_promotor',function($table){

			$table->increments('id');

			$table->integer('id_promotor')->unsigned();
			$table->integer('id_invitado')->unsigned();
			
			$table->timestamps();

			$table->index('id_promotor');
			$table->index('id_invitado');

			$table->foreign('id_promotor')
			      ->references('id')->on('promotores')
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
		Schema::dropIfExists('invitado_promotor');
	}

}