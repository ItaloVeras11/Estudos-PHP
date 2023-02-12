<?php

function f1() 
{
    echo ">f1 está antes da execução"."<br/>";
}

function f2($int)
{
    if(!is_int($int))
    {
        throw new Exception("O argumento nao é valido");
    }
    else
    {
        echo ">F2 esta em exceção"."<br/>";
    }

    f3();
}

function f3()
{
    echo ">F3 esta depois da exceçao";
}

f1();

f2(
    int: 5
);

