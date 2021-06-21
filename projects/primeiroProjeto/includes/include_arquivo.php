<?php
echo 'Carregado: include_arquivo';
echo '<br>';

$variavel = 'Estou definida';

if (!function_exists('soma'))
{
    function soma($a, $b)
    {
        return $a + $b;
    }
}