<?php
declare(strict_types = 1);

namespace tests;

class BddTest extends \PHPUnit_Framework_TestCase
{

    public function testConnexionBdd()
    {
        try {
            $connexion = new \src\Bdd();
        } catch (\RuntimeException $e) {
            $this->fail($e->getMessage());
        }
    }
}