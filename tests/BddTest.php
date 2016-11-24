<?php
declare(strict_types = 1);

namespace tests;

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
}