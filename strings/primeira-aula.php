<?php

$nome = 'Alex Perdigão';

var_dump(str_contains($nome, 'Perdigão'));

$ehDaMinhaFamilia = str_contains($nome, 'Perdigão');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" .PHP_EOL;
}

