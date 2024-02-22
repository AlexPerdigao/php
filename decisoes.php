<?php

$idade = 15;
$numeroDePessoas = 2;

echo "Você só pode entrar se você tiver mais que 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas > 1 ) {
        echo "Você só tem $idade anos, está acompanhado(a), então pode entrar." . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}
echo "Adeus!";

