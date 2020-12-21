<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // não interpola
echo '<br> {$numero}'; // não interpola
echo "<br> $numero"; // interpola
echo "<br> {$numero}"; // interpola
echo '<br>';

$texto = "A sua nota é $numero.";
echo "<br> $texto";
echo '<br>';

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objetos.";
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto}s.";
echo '<br>';

echo "<br> $numero";
echo "<br> $numero + 1";
// echo "{$numero + 1}"; // gera um erro, não interpreta