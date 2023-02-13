<?php 

$data = new DateTime();

$intervalo = new DateInterval('PT5M');
$data->sub($intervalo);

var_dump($data);