<?php

declare(strict_types=1);

namespace src;

use Symfony\Component\Debug\Debug;

require ("../vendor/autoload.php");

Debug::enable();

$test = new Bdd();
