<div class="titulo">Desafio equação</div>

<?php
// RESOLUÇÃO DO PROFESSOR
echo "<h3>RESOLUÇÃO DO PROFESSOR</h3>";

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$resultadoFinal = $superior / $inferior;
echo "O resultado final é: " . $resultadoFinal . ".";
echo '<br>';
echo '<br>';

// MINHA RESOLUÇÃO
echo "<h3>MINHA RESOLUÇÃO</h3>";

// numerador da primeira equação
$numerador1Equacao1 = (3 + 2);
$numerador2Equacao1 = (6 * $numerador1Equacao1);
$resultadoNumeradorEquacao1 = $numerador2Equacao1 ** 2;

// denominador da primeira equação
$resultadoDenominadorEquacao1 = 3 * 2;

// resultado da primeira equação
$resultadoEquacao1 = $resultadoNumeradorEquacao1 / $resultadoDenominadorEquacao1;

// numerador da segunda equação
$numerador1Equacao2 = (1 - 5);
$numerador2Equacao2 = (2 - 7);
$resultadoNumeradorEquacao2 = $numerador1Equacao2 * $numerador2Equacao2;

// denominador da segunda equação
$resultadoDenominadorEquacao2 = 2;

// resultado da segunda equação
$resultadoEquacao2 = ($resultadoNumeradorEquacao2 / $resultadoDenominadorEquacao2) ** 2;

// denominador geral
$resultadoDenominadorEquacaoPrincipal = 10 ** 3;

// numerador geral
$resultadoNumeradorEquacaoPrincipal = ($resultadoEquacao1 - $resultadoEquacao2) ** 3;

// resultado final da equação
$resultadoFinal = $resultadoNumeradorEquacaoPrincipal / $resultadoDenominadorEquacaoPrincipal;

// representação da equação
echo '( ' . $resultadoEquacao1 . ' - ' . $resultadoEquacao2 . ' ) ³' . '<br>' . '—————' . ' = ' . '<br>' . $resultadoDenominadorEquacaoPrincipal;
echo '<br>';
echo '<br>';

echo $resultadoNumeradorEquacaoPrincipal . '<br>' . '———' . ' = ' . $resultadoFinal . '<br>' . $resultadoDenominadorEquacaoPrincipal;

echo '<br>';
echo '<br>';
echo "O resultado final é: " . $resultadoFinal . ".";