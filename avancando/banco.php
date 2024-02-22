<?php

require 'funcoes.php';

$contaCorrentes = [

    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
    ],

    '223.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '323.456.789-10' => [
        'titular' => 'Alex',
        'saldo' => 15000
    ]
];

$contaCorrentes ['123.456.789-10'] = sacar($contaCorrentes['123.456.789-10'], 1200);
$contaCorrentes ['323.456.789-10'] = sacar($contaCorrentes ['323.456.789-10'], 500);
$contaCorrentes ['223.456.789-10'] = depositar($contaCorrentes ['223.456.789-10'], 900);


foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}