<?php

class Invitado extends Eloquent
{
	public static $table = 'invitados';

	public function promotores()
	{
		return $this->belongsToMany('Promotor', 'invitado_promotor','id_invitado', 'id_promotor');
	}

	public function propuestas()
	{
		return $this->belongsToMany('Propuesta', 'invitado_propuesta','id_invitado', 'id_propuesta');
	}

	public function opciones()
	{
		return $this->belongsToMany('Opcion', 'invitado_opcion','id_invitado', 'id_opcion');
	}

}