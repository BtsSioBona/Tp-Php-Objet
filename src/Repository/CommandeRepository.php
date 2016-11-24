<?php
declare(strict_types = 1);

namespace src\Repository;


use src\interfaces\IRepository;

class CommandeRepository implements IRepository
{

    private $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }


    /***
     * Trouve un enregistrement par rapport à l'id
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        $req = $this->conn->prepare("SELECT * FROM tppdo.commande WHERE id = :id");
        $req->bindParam(':id', $id);
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }

    /***
     * Retourne toutes les valeurs
     * @return mixed
     */
    public function findAll()
    {
        return $this->conn->query("SELECT * FROM tppdo.commande")->fetchAll(\PDO::FETCH_ASSOC);
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