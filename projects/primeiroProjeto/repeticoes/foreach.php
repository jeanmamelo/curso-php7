<div class="titulo">Foreach</div>

<?php

$array = [
    1000 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach ($array as $value) {
    echo "$value <br>";
}

    echo "<br>";

foreach ($array as $key => $value) {
    echo "$key => $value <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

    echo "<br>";

foreach ($matrix as $line) {
    // echo "$line <br>";
    foreach ($line as $value) {
        echo "$value ";
    }
    echo "<br>";
}

echo "<br>";

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar ";
}
echo "<br>";
print_r($numeros);