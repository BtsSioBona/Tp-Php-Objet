<?php
declare(strict_types = 1);

namespace src\Repository;

use src\interfaces\IRepository;

class ClientRepository implements IRepository
{

    /***
     * Trouve un enregistrement par rapport à l'id
     * @param integer $id
     * @return mixed
     */
    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    /***
     * Retourne toutes les valeurs
     * @return mixed
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    /***
     * Insert un objet en base de donnée
     * @param object $object
     * @return mixed
     */
    public function Insert($object)
    {
        // TODO: Implement Insert() method.
    }
}