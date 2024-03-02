<?php

$notasBimestre1 = [
    'Maria' => 10,
    'João' => 9,
    'Alex' => 8,
    'Ju' => 7,
    'Ana' => 6,
    'Zé' => 5
];

$notasBimestre2 = [
    'Maria' => 10,
    'João' => 9,
    'Alex' => 8,
    'Ju' => 7
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump($alunosFaltantes);
var_dump (array_flip($alunosFaltantes));
