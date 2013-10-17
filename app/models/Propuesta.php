<?php

class Propuesta extends Eloquent
{
	
	public static $table = 'propuestas';

	public function invitados()
	{
		return $this->has_many_and_belongs_to('Invitado');
	}

	public function opciones()
	{
		return $this->has_many('Opcion');
	}

	public function promotor()
	{
		return $this->belongs_to('Promotor')
	}
}