<div class="titulo">Require e return</div>

<?php
// $valorRetorno = include 'return_usado.php';
$valorRetorno = require 'return_usado.php';
echo $valorRetorno;
echo '<br>';

echo $variavelRetornada;
echo '<br>';

echo __DIR__ . '<br>';

// $valorRetorno2 = include __DIR__ . '/return_nao_usado.php';
$valorRetorno2 = require __DIR__ . '/return_nao_usado.php';
var_dump($valorRetorno2);
echo '<br>';
echo $valorRetorno2;
echo '<br>';

echo $variavelDeclarada;
echo '<br>';