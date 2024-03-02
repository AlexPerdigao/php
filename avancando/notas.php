<?php

$notas = [
    'Maria' => null,
    'João' => 9,
    'Alex' => 8,
    'Ju' => 7,
    'Ana' => 6,
    'Zé' => 5
];

krsort($notas);

if (is_array($notas)) {
    echo 'Sim é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Maria fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Maria']));
var_dump(array_key_exists('Maria', $notas));

echo 'Alguém tirou 9?' . PHP_EOL;
var_dump(in_array(9, $notas, true));

echo 'Quem tirou 9?' . PHP_EOL;
var_dump(array_search(9, $notas));

//array_key_exists = Verifica se a chave existe;
//in_array = Verifica se o valor existe;
//isset = Verifica se a chave existe e não é nula;