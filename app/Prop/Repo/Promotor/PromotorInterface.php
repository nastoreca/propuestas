<?php namespace Prop\Repo\Promotor;

interface PromotorInterface {

    /**
     * Crea una nueva promotor 
     *
     * @param  array $data  Contenedor de los datos de la promotor a crear
     * @return boolean      indica si se ha realizado o no el metodo 
     */
    public function create(array $data);

}