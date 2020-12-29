<div class="titulo">Operador ternário</div>

<?php
$idade = 70;
$status;

if ($idade >= 18) {
    $status = "Maior de idade";
} else {
    $status = "Menor de idade";
}
echo "$status<br>";
echo '<br>';

$idade = 17;
$status = $idade >= 18 ? "Maior de idade" : "Menor de idade";
echo "$status<br>";
echo '<br>';

$idade = 70;
$tipoMaiorIdade = $idade >= 65 ? "Aposentado" : "Maior de idade";
$status = $idade >= 18 ? $tipoMaiorIdade : "Menor de idade";

$status = $idade >= 18 ? ($idade >= 65 ? "Aposentado" : "Maior de idade") : "Menor de idade"; // ternário dentro de ternário
echo "$status<br>";
