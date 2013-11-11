<?php

class Propuesta extends Eloquent
{

    /**
     * La tabla usada por el modelo en base de datos.
     *
     * @var string
     */
	protected $table = 'propuestas';
	
    /**
     * Los atributos que son mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'id_promotor',
        'titulo',
        'descripcion',
        'hora',
        'lugar',
        'vencimiento',
    );

	public function invitados()
	{
		return $this->belongsToMany('Invitado', 'invitado_propuesta','id_propuesta', 'id_invitado');
	}

	public function opciones()
	{
		return $this->hasMany('Opcion');
	}

	public function promotor()
	{
		return $this->belongsTo('Promotor')
	}
}