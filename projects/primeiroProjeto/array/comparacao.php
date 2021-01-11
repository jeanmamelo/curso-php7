<div class="titulo">Comparação arrays</div>

<?php
$array1 = ['nome' => 'Maria', 'idade' => 20];
$array2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($array1 == $array2);
var_dump($array1 === $array2);

$array3 = ['idade' => 20, 'nome' => 'Maria'];
var_dump($array1 == $array3);
var_dump($array1 === $array3);
var_dump($array1 != $array3);
var_dump($array1 !== $array3);

$array4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($array1 == $array4);
var_dump($array1 === $array4);