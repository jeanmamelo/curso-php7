<div class="titulo">Valor x referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel . '<br>';

// atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// atribuição por referência
echo '<br>';
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "<br>$variavel $variavelReferencia";
