<?php

namespace POO;

class ContaBancaria
{
    public string $banco = "Banco Inter";
    public string $nomeTitular = "Italo Veras";
    public string $numeroAgencia = "8244-5";
    public string $numeroConta = "44555-66";
    public float $saldo = 0;

    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,

        ];
    }


    public function obterSaldo()
    {
        return "Ola eu sou metodo obter acesso";
    }
}

$conta = new ContaBancaria();

var_dump($conta->obterSaldo());

