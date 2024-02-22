<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Deposito preceisam ser positivos");
    }
    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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
    exibeMensagem($cpf ." ". $conta['titular'] .' '. $conta['saldo'] .' ');
}