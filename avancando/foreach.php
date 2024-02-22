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

foreach ($contaCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
    echo $cpf . PHP_EOL;
}