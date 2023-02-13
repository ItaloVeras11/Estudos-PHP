<?php

namespace POO;

use function PHPSTORM_META\map;

class ContaBancaria
{
    public string $banco;
    public string $nomeTitular;
    public string $numeroAgencia;
    public string $numeroConta;
    public float $saldo;


    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return "Seu saldo é:". $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Deposito de R$' . $valor . 'realizado';
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }
}

$conta = new ContaBancaria(
    "Banco Inter",
    "Italo Veras",
    "9988",
    "99988-77",
    300.00,
);





echo $conta->obterSaldo();

$conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo();

$conta->sacar(150.00);

echo PHP_EOL;

echo $conta->obterSaldo();

