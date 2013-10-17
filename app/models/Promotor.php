<?php

class Promotor extends Eloquent
{
	public static $table = 'promotores';	

	public function invitados()
	{
		return $this->has_many_and_belongs_to('Invitado');
	}

	public function propuestas()
	{
		return $this->has_many('Propuesta')
	}
}
