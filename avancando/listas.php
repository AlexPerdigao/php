<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeAlex, $idadeJoao, $idadeMaria) = $idadeList;
echo $idadeAlex . PHP_EOL;
echo $idadeJoao . PHP_EOL;
echo $idadeMaria . PHP_EOL;

foreach ($idadeList as $idade) {
    echo  $idade . PHP_EOL;

}

echo "Total: " . count($idadeList) . PHP_EOL;
echo "Total: " . sizeof($idadeList) . PHP_EOL;


