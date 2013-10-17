<?php

class Opcion extends Eloquent
{

	public static $table = 'opciones'
	
	public function invitados(argument)
	{
		return $this->has_many_and_belongs_to('Invitado');
	}

	public function propuesta()
	{
		return $this->belongs_to('Propuesta');
	}

}