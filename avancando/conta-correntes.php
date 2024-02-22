<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alex',
    'saldo' => 15000
];

$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i++) {
    echo $contaCorrentes[$i] ['titular'] . PHP_EOL;
}
