<div class="titulo">Retornando função</div>

<?php
function soma($a) {
    // algoritmo (demore 30s)
    return function($b) use ($a) {
        return $a + $b; // demore (3s)
    };
}

echo soma(13)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(20);