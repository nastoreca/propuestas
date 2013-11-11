<?php

class Promotor extends Eloquent
{
	public static $table = 'promotores';	

	public function invitados()
	{
		return $this->belongsToMany('Invitado', 'invitado_promotor','id_promotor', 'id_invitado');
	}

	public function propuestas()
	{
		return $this->hasMany('Propuesta')
	}
}
