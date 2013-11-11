<?php

class Opcion extends Eloquent
{

	public static $table = 'opciones'
	
	public function invitados(argument)
	{
		return $this->belongsToMany('Invitado', 'invitado_opcion', 'id_opcion', 'id_invitado');
	}

	public function propuesta()
	{
		return $this->belongsTo('Propuesta');
	}

}