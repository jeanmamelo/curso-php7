<div class="titulo">Desafio sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

/**
 * Minha resposta
 */
$index = array_rand($nomes);
print_r($nomes[$index]);

/**
 * Resposta do professor
 */
$index = array_rand($nomes);
echo "<div center><h1>$nomes[$index]</h1></div>"

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>