<?php

class Invitado extends Eloquent
{
	public static $table = 'invitados';

	public function promotores()
	{
		return $this->has_many_and_belongs_to('Promotor');
	}

	public function propuestas()
	{
		return $this->has_many_and_belongs_to('Propuesta');
	}

	public function promotores()
	{
		return $this->has_many_and_belongs_to('Promotor');
	}

	public function opciones()
	{
		return $this->has_many_and_belongs_to('Opcion');
	}

}