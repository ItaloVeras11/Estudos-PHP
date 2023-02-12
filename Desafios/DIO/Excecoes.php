<?php

function divisao($dividendo, $divisor)
{
    try{
    
        if($divisor == 0){
            throw new RangeException("O numero nao pode ser divido por zero");
    
        }

        $resultado = $dividendo/$divisor;

        echo "O resultado é:".$resultado;
        }catch(Exception){
           // echo $e->getMessage();
           echo "O numero nao pode ser dividido por 0";
        }
        finally{
            echo "Tratando exceçoes";
        }
}

divisao(10,0);