<?php namespace Prop\Repo;

interface PropuestaInterface {

    /**
     * Crea una nueva propuesta 
     *
     * @param  object $propuesta Objeto contenedor de los datos de la propuesta a crear
     * @return boolean           indica si se ha realizado o no el metodo 
     */
    public function create(object $propuesta);

    /**
     * Obtiene una propuesta por id 
     *
     * @param  int $id  identificador de la propuesta
     * @return object   Objeto contenedor de los datos de la propuesta consultada
     */
    public function porId(int $id);

    /**
     * Vota por una opcion propuesta
     *
     * @param  int $id        identificador de la propuesta
     * @param  int $idOpcion  identificador de la opcion
     * @return boolean        indica si se ha realizado o no el metodo 
     */
    public function vota(int $id, int $idOpcion);

    /**
     * Elimina voto de una opcion 
     *
     * @param  int $id        identificador de la propuesta
     * @param  int $idOpcion  identificador de la opcion
     * @return boolean        indica si se ha realizado o no el metodo
     */
    public function eliminaVoto(int $id, int $idOpcion);
    