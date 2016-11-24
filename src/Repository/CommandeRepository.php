<?php
declare(strict_types = 1);

namespace src\Repository;


use src\Entity\Commande;
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
     * @param Commande $commande
     * @return bool
     */
    public function Insert($commande)
    {
        $req = $this->conn
            ->prepare("INSERT INTO tppdo.commande (idclient, datecde) VALUES (:idclient, :datecde)");

        $idClient = null;
        $req->bindParam(':idclient', $idClient);
        $titre = $commande->getLeClient()->getId();

        $datecde = null;
        $req->bindParam(':datecde', $datecde);
        $datecde = $commande->getDatecde();

        //todo: Faire la récup de l'id et la conversion de date
    }
}