<?php
declare(strict_types = 1);

namespace tests;

use src\Bdd;
use src\Repository\ClientRepository;
use src\Repository\CommandeRepository;

class BddTest extends \PHPUnit_Framework_TestCase
{

    /***
     * Test de connxion à la base de donnée
     */
    public function testConnexionBdd()
    {
        try {
            $connexion = new \src\Bdd();
        } catch (\RuntimeException $e) {
            $this->fail($e->getMessage());
        }
    }

    /***
     * Test récupération d'un client
     */
    public function testResultOneClient() {
        $bdd = new Bdd();
        $repo = new ClientRepository($bdd->getConnexion());
        $this->assertNotEmpty($repo->findById(1));
    }

    /***
     * Test récupération de tout les clients
     */
    public function testResultAllClient() {
        $bdd = new Bdd();
        $repo = new ClientRepository($bdd->getConnexion());
        $this->assertNotEmpty($repo->findAll());
    }

    /***
     * Test récupération d'une commande
     */
    public function testResultOneCommande() {
        $bdd = new Bdd();
        $repo = new CommandeRepository($bdd->getConnexion());
        $this->assertNotEmpty($repo->findById(1));
    }

    /***
     * Test récupération de toute les commandes
     */
    public function testResultAllCommande() {
        $bdd = new Bdd();
        $repo = new CommandeRepository($bdd->getConnexion());
        $this->assertNotEmpty($repo->findAll());
    }
}