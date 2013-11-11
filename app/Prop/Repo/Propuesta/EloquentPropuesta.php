<?php namespace Prop\Repo\Propuesta;

use Prop\Repo\Propuesta\PromotorInterface;
use Prop\Repo\Propuesta\InvitadoaInterface;
use Prop\Repo\Propuesta\OpcionInterface;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class EloquentPropuesta implements PropuestaInterface {

	proted $propuesta;
	proted $invitado;
	proted $promotor;
	proted $opcion;

	function __construct(Model $propuesta, invitadoInterface $invitado, promotorInterface $promotor, opcionInterface $opcion)
	{
		$this->propuesta = $propuesta;
		$this->invitado  = $invitado;
		$this->promotor  = $promotor;
		$this->opcion    = $opcion;
	}

    /**
     * Crea una nueva propuesta 
     *
     * @param  array $data  Contenedor de los datos de la propuesta capturada
     * @return boolean      indica si se ha realizado o no el metodo 
     */
    public function create(array $data)
	{
		//Crear la propuesta
		$propuesta = $this->propuesta->create(array(
			'titulo' => $data['titulo'],
			'descripcion' => $data['descripcion'],
			'hora' => $data['hora'],
			'lugar' => $data['lugar'],
			'vencimiento' => $data['vencimiento'],
			));

		if ( ! $propuesta )
		{
			return false;			
		}

		//Insertar promotor
		$promotor = $this->promotor->create(array($data['promotor']), $propuesta);
		
		//Insertar invitados
		$invitados = array($data['invitados']);
		foreach ($invitados as $invitado) 
		{
		    $invitadoCreado = $this->invitado->create($invitado, $propuesta);
		}

		//Insertar opciones
		$opciones = array($data['opciones']);
		foreach ($opciones as $opcion) {
			$opcionCreada = $this->opcion->create($opcion, $propuesta)
		}

		return true;
	}

    /**
     * Obtiene una propuesta por id 
     *
     * @param  int $id  identificador de la propuesta
     * @return object   Objeto contenedor de los datos de la propuesta consultada
     */
    public function porId($id);

    /**
     * Vota por una opcion propuesta
     *
     * @param  int $id        identificador de la propuesta
     * @param  int $idOpcion  identificador de la opcion
     * @return boolean        indica si se ha realizado o no el metodo 
     */
    public function vota($id, $idOpcion);

    /**
     * Elimina voto de una opcion 
     *
     * @param  int $id        identificador de la propuesta
     * @param  int $idOpcion  identificador de la opcion
     * @return boolean        indica si se ha realizado o no el metodo
     */
    
    public function eliminaVoto($id, $idOpcion);
   
}
