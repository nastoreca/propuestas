<?php namespace Prop\Repo;

use Prop\Repo\PropuestaInterface;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class EloquentPropuesta extends PropuestaInterface
{
	proted $propuesta;
	proted $invitado;
	proted $promotor;
	proted $opcion;

	function __construct(Model $propuesta, Model $invitado, Model $promotor, Model $opcion)
	{
		$this->propuesta = $propuesta;
		$this->invitado  = $invitado;
		$this->promotor  = $promotor;
		$this->opcion    = $opcion;
	}
}
