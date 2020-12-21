<div class="titulo">Desafio precedência</div>

<style>
    [correta] {
        color: rgb(0, 255, 0);
    }

    [errada] {
        color: rgb(255, 0, 0);
    }
</style>

<?php
echo '<p>1. Qual será o valor impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a) <span errada>', (1 + 2) * 20 - 15, '</span><br>';
echo 'b) <span correta>', 4 * 5 ** 2, '</span><br>';
echo 'c) <span errada>', 2 ** 3 ** 4 / 1e25, '</span><br>';
echo 'd) <span errada>', 3 + (3 * 8) / 2 - 3;
