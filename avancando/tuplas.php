<?php

$dados = ['Alex', 10, 51];

list($nome, $nota, $idade) = $dados;
var_dump($dados);

//sintaxe que retorna o mesmo resultado

[$nome, $nota, $idade] = $dados;
var_dump($dados);

$dados2 = [
    'nome2' => 'Maria',
    'nota2' => 10,
    'idade2' => 45
];
//['nome2' => $nome2, 'nota2' => $nota2, 'idade2' => $idade2] = $dados2;
extract($dados2);
var_dump($nome2, $nota2, $idade2) . PHP_EOL;

var_dump(compact('nome2', 'nota2', 'idade2'));





