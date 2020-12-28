<div class="titulo">Operadores relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

echo '<br>';

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p>Relacionais no if/else</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Idade = $idade anos, ou seja, menor de idade<br>";
} elseif ($idade <= 65) {
    echo "Idade = $idade anos, ou seja, adulto<br>";
} else {
    echo "Idade = $idade anos, ou seja, terceira idade<br>";
}

echo "<p>Spaceship</p><hr>";
var_dump(5 <=> 1); // 1
var_dump(1 <=> 5); // -1
var_dump(5 <=> 5); // 0

echo "<p>Valores podem ser TRUE ou FALSE</p><hr>";
var_dump(!!5); // true
var_dump(!!0); // false
var_dump(!!""); // false
var_dump(!!" "); // true
?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>