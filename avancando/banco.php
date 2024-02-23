<?php

require_once 'funcoes.php';

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

$contaCorrentes ['123.456.789-10'] = sacar($contaCorrentes['123.456.789-10'], 1);
$contaCorrentes ['323.456.789-10'] = sacar($contaCorrentes ['323.456.789-10'], 500);
$contaCorrentes ['223.456.789-10'] = depositar($contaCorrentes ['223.456.789-10'], 900);

unset($contaCorrentes['123.456.789-10']);

titularComLetraMaisuculas($contaCorrentes['323.456.789-10']);

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contaCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
