<?php
declare(strict_types = 1);

namespace src\Repository;

use src\interfaces\IRepository;

class ClientRepository implements IRepository
{

    private $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }


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
        return $this->conn->query("SELECT * FROM tppdo.client")->fetchAll(\PDO::FETCH_ASSOC);
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