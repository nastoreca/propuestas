<?php

use Illuminate\Database\Migrations\Migration;

class CreateOpcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opciones',function($table){

			$table->increments('id');

			$table->integer('id_propuesta')->unsigned();
			$table->date('fecha');
			$table->string('descripcion', 50)->nullable();

			$table->timestamps();

			$table->index('id_propuesta');

			$table->foreign('id_propuesta')
			      ->references('id')->on('propuestas')
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
		Schema::dropIfExists('opciones');
	}

}