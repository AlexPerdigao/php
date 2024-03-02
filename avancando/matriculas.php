<?php

$alunos2021 = [
    'Maria',
    'João',
    'Alex',
    'Ju',
    'Ana',
    'Zé'
];

$novosAlunos = [
    'Duda',
    'Caio',
    'Victor',
    'Julia',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

$alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);

$alunos2022 = [...$alunos2021, 'James', ...$novosAlunos];
var_dump($alunos2022);

array_push($alunos2022, 'Marcos', 'José', 'Geraldo');
$alunos2022[] = 'Luiz';
array_unshift($alunos2022, 'Carlos', 'Ricardo');
var_dump($alunos2022);

echo array_shift($alunos2022) . PHP_EOL;
echo array_pop($alunos2022) . PHP_EOL;
