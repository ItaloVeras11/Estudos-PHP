<?php 

function validarUsuario(array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        throw new Exception("Campos Obrigatorios nao foram preenchidos");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

try{
    $status = validarUsuario($usuario);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Status da Operaçao: " . (int)$status;
}


