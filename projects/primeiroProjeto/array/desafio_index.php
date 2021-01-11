<div class="titulo">Desafio index</div>

<?php
$lista = array(
    1,
    4    => 2,
    3    => 3,
    'a'  => 4,
    5,
    '9'  => 6,
    '06' => 7,
    0    => 8,
);

print_r($lista);

/**
 * Minha resposta
 */
// Array([0] => 8 [1] => 1 [4] => 2 [3] => 3 ['a'] => 4 [5] => 5 ['9'] => 6 ['06'] => 7)

/**
 * Resposta do professor
 */
// Array([0] => 8 [4] => 2 [3] => 3 ['a'] => 4 [5] => 5 ['9'] => 6 ['06'] => 7)