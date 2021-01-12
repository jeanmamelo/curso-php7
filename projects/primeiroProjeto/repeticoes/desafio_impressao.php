<div class="titulo">Desafio impressão</div>

<!-- 
    Enunciado:
    - Imprime apenas os valores do array que contém índice par
    - Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
 -->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i = 0; $i < count($array) ; $i++) { 
    if ($i % 2 === 1) {
        continue;
    }
    echo "{$array[$i]} ";
}

echo "<br>";

foreach ($array as $key => $value) {
    if ($key % 2 !== 0) {
        continue;
    }
    echo "$value ";
}