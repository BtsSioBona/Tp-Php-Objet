<?php
declare(strict_types = 1);

namespace src\Repository;

use src\Entity\Client;
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
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        $req = $this->conn->prepare("SELECT * FROM tppdo.client WHERE id = :id");
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
        return $this->conn->query("SELECT * FROM tppdo.client")->fetchAll(\PDO::FETCH_ASSOC);
    }

    /***
     * Insert un objet en base de donnée
     * @param Client $client
     * @return bool
     */
    public function Insert($client)
    {
        $req = $this->conn
            ->prepare("INSERT INTO tppdo.client (titre, nom, prenom, adresserue1, adresserue2, cp, ville, tel) VALUES (:titre, :nom, :prenom, :adresserue1, :adresserue2, :cp, :ville, :tel)");

        $titre = null;
        $req->bindParam(':titre', $titre);
        $titre = $client->getTitre();

        $nom = null;
        $req->bindParam(':nom', $nom);
        $nom = $client->getNom();

        $prenom = null;
        $req->bindParam(':prenom', $prenom);
        $prenom = $client->getPrenom();

        $adresserue1 = null;
        $req->bindParam(':adresserue1', $adresserue1);
        $adresserue1 = $client->getAdresserue1();

        $adresserue2 = null;
        $req->bindParam(':adresserue2', $adresserue2);
        $adresserue2 = $client->getAdresserue2();

        $cp = null;
        $req->bindParam(':cp', $cp);
        $cp = $client->getCp();

        $ville = null;
        $req->bindParam(':ville', $ville);
        $ville = $client->getVille();

        $tel = null;
        $req->bindParam(':tel', $tel);
        $tel = $client->getTel();


        return $req->execute();
    }
}