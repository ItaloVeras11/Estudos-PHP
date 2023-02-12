<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) 
    {
        exibeMensagem("Você não pode sacar este valor");
    } 
    else 
    {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function depositar($conta, $valorADepositar)
{
    if($valorADepositar > 0){

        $conta['saldo'] += $valorADepositar;

    }else {
        exibeMensagem("Depositos precisam ser Positivos");
    }
    
    return $conta;

}

function exibeConta(array $conta)
{
    ['titular' => $titular, ['saldo'] => $saldo] = $conta;
    echo "<li> Titular: $titular Saldo: $saldo</li>";
}