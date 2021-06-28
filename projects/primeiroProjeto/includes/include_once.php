<div class="titulo">Include once</div>

<?php
include 'include_once_arquivo.php';
require 'include_once_arquivo.php';

echo "Variável = '{$variavel}'.";
echo '<br>';
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.";
echo '<br>';

include 'include_once_arquivo.php';
echo "Variável = '{$variavel}'.";
echo '<br>';
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.";
echo '<br>';

include_once 'include_once_arquivo.php';
echo "Variável = '{$variavel}'.";
echo '<br>';

require_once 'include_once_arquivo.php';
echo "Variável = '{$variavel}'.";
echo '<br>';
