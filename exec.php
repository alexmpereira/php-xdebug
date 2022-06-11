<?php

use Alex\Phpxdebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';

$cliente = new Cliente();

echo $cliente->hello();