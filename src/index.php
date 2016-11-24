<?php

declare(strict_types=1);

namespace src;

use src\Repository\CommandeRepository;
use Symfony\Component\Debug\Debug;

require ("../vendor/autoload.php");

Debug::enable();


$bdd = new Bdd();
$repo = new CommandeRepository($bdd->getConnexion());

dump($repo->findAll());
