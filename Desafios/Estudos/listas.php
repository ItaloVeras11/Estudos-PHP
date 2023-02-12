<?php

$idadeList = [10, 15, 20, 40, 50];

$idadeList[] = 25;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}