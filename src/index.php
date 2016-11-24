<?php

declare(strict_types=1);

namespace src;

use src\Entity\Client;
use src\Entity\Commande;
use src\Repository\ClientRepository;
use src\Repository\CommandeRepository;
use Symfony\Component\Debug\Debug;

require ("../vendor/autoload.php");

Debug::enable();


$bdd = new Bdd();
$client = new Client(5, "test", "test", "test", "test", "test", "test", "test", "test", new Commande());

dump($client);

$repo = new ClientRepository($bdd->getConnexion());
dump($repo->Insert($client));
