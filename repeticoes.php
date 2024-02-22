<?php

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}
echo PHP_EOL;

for ($contador2 = 1; $contador2 <= 20; $contador2++) {
    if ($contador2 == 13){
        continue;
    }
    echo "#$contador2" .PHP_EOL;
}
echo PHP_EOL;

for ($contador3 = 1; $contador3 <= 20; $contador3++) {
    if ($contador3 == 13){
        break;
    }
    echo "#$contador3" .PHP_EOL;
}