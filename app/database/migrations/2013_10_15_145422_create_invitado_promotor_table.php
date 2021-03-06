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

			$table->integer('id_promotor')->unsigned()->index();
			$table->integer('id_invitado')->unsigned()->index();
			
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