<div class="titulo">Desafio includes</div>

<?php
require_once 'usuario.php';

$usuario = new Usuario('Gustavo Guanabara', 40, 'guanabara');
$usuario->apresentar();

unset($usuario);
