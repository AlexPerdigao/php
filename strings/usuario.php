<?php

$nome = 'Alex Perdigão';
$email = 'Aléxfperdigao@gmail.com';
$senha = '123ààà';

$posicaoDoArroba = strpos($email, '@');

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) .PHP_EOL;

list( $nome, $sobrenome ) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: '. $sobrenome . PHP_EOL;



