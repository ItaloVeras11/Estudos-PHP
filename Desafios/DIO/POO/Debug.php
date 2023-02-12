<?php

require __DIR__ . '/ContaBancaria.php';

use ContaBancaria;

$conta = new ContaBancaria();
var_dump($conta->exibirDadosDaConta());