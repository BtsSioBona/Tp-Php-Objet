<?php
declare(strict_types = 1);

namespace src\interfaces;

interface IRepository {

    /***
     * Trouve un enregistrement par rapport à l'id
     * @param integer $id
     * @return mixed
     */
    public function findById($id);

    /***
     * Retourne toutes les valeurs
     * @return mixed
     */
    public function findAll();

    /***
     * Insert un objet en base de donnée
     * @param object $object
     * @return mixed
     */
    public function Insert($object);

}