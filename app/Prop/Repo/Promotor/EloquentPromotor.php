<?php namespace Prop\Repo\Promotor;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class EloquentPromotor implements PromotorInterface {

	proted $promotor;

	function __construct(Model $promotor)
	{
		$this->promotor  = $promotor;
	}

    /**
     * Crea una nueva propuesta 
     *
     * @param  array $data  	Contenedor de los datos de la propuesta capturada
     * @param  Model $propuesta Instancia del modelo propuesta para actualizar y asociar
     * @return boolean     		indica si se ha realizado o no el metodo 
     */
    public function create(array $data, Model $propuesta)
	{
		//Crear la propuesta
		$promotor = $this->promotor->create(array(
			'email' => $data['email'],
			'password' => $data['password'],
			'nombre' => $data['nombre'],
			'apellidos' => $data['apellidos'],
			));

		if ( ! $promotor )
		{
			return false;			
		}

		//Actualizamos y asociamos propuesta a promotor
		$promotor->propuestas()->save($propuesta)
	
		return true;
	}
  
}
