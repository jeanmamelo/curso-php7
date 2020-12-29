<div class="titulo">Operadores lógicos</div>

<?php
echo "<p class='divisao'>Tabela verdade do 'NOT'</p><hr>";
var_dump(true);
var_dump(!true); // not

echo '<br>';

echo "<p class='divisao'>Tabela verdade do 'AND'</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo '<br>';

echo "<p class='divisao'>Tabela verdade do 'OR'</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo '<br>';

echo "<p class='divisao'>Tabela verdade do 'XOR'</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo  = 'M';

$pagouPrevidencia = true;
$criterioFeminino = ($idade >= 60 && $sexo === 'F');
$criterioMasculino = ($idade >= 65 && $sexo === 'M');
$atingiuCriterio = ($criterioMasculino || $criterioFeminino);
$podeSeAposentar  = ($pagouPrevidencia && $atingiuCriterio);
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if ($idade >= 60 && $sexo === 'F') {
    echo " Já pode se aposentar. Idade: $idade e sexo: $sexo.<br>";
}
elseif ($idade >= 65 && $sexo === 'M') {
    echo " Já pode se aposentar. Idade: $idade e sexo: $sexo.<br>";
} else {
    echo " Terá que trabalhar mais um pouco. Idade: $idade e sexo: $sexo.<br>";
}
