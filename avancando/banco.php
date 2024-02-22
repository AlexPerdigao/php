<?php

$contaCorrentes = [

    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
    ],

    22345678910 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    32345678910 => [
        'titular' => 'Alex',
        'saldo' => 15000
    ]
];

$contaCorrentes [12345678910] ['saldo'] -= 1500;
$contaCorrentes [32345678910] ['saldo'] -= 500;


foreach ($contaCorrentes as $cpf => $conta) {
    echo $cpf ." ". $conta['titular'] .' '. $conta['saldo'] .' '. PHP_EOL;
}