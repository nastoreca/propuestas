<?php

use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propuestas',function($table){

			$table->increments('id');

			$table->integer('id_promotor')->unsigned();						
			$table->string('titulo', 40)->nullable();			
			$table->string('descripcion', 450)->nullable();
			$table->time('hora');			
			$table->string('lugar', 40)->nullable();			
			$table->date('vencimiento');

			$table->timestamps();

            $table->index('id_promotor');
            
			$table->foreign('id_promotor')
			      ->references('id')->on('promotores')
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
		Schema::dropIfExists('propuestas');
	}

}