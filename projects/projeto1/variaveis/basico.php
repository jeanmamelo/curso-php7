<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);
    
    echo '<br>';
    $a = 3;
    $b = 16;
    $somaDosNumeros = $a + $b;
    echo $somaDosNumeros;
    $somaDosNumeros = 0;
    
    echo '<br>';
    echo isset($somaDosNumeros);
    
    echo '<br>';
    unset($somaDosNumeros);
    echo !isset($somaDosNumeros);
    
    echo '<br>';
    unset($somaDosNumeros);
    var_dump($somaDosNumeros);