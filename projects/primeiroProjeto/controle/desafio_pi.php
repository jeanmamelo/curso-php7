<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

var_dump($pi);
var_dump(pi());

if ($pi === pi()) {
    echo "Iguais<br>";
} else {
    echo "Diferentes<br>";
}

echo '<br>';

// Operador relacional
$piErrado = 2.8;

// Resposta
echo 'Resposta<br>';
echo $pi - pi();
echo '<br>';
echo $pi - $piErrado;

if ($pi - pi() <= 0.01) {
    echo "<br>Valor aceitável";
}

if ($pi - $piErrado <= 0.01) {
    echo "<br>Valor aceitável";
} else {
    echo "<br>Valor inaceitável";
}