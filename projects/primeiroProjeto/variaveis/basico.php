<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
$somaDosNumeros = 0;

echo '<br>';
echo isset($somaDosNumeros);

echo '<br>';
unset($somaDosNumeros);
echo !isset($somaDosNumeros);

echo '<br>';
unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora eu sou uma string!";
echo '<br>' . $variavel;

// nomes de variáveis
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';
$vár5 = 'válida'; // porém evitar!
// $6var = 'inválida';
// $%var7 = 'inválida';
// $var%8 = 'inválida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);