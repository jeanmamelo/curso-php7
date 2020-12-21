<div class="titulo">Tipo string</div>

<?php
echo ('Eu sou uma string'), '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' somos' . '<br>';
echo "Número é " . 123, '<br>';
echo "Também aceito", " virgulas", '<br>';
echo "'Teste' " . '"Teste"', '<br>';
echo '\'Teste\' ' . "\"Teste\"", '<br>';
echo '\\' . " teste \\", '<br>';

print("Também existe a função print<br>");
print "Também existe a função print<br>";

// algumas funções
echo strtoupper('maximizando') . '<br>';
echo strtolower('MINIMIZANDO') . '<br>';
echo ucfirst('só a primeira letra') . '<br>';
echo ucwords('todas as primeiras letras') . '<br>';
echo strlen('quantidade de caracteres') . '<br>';
echo mb_strlen("Eu também", "utf-8") . '<br>'; // mb_ não conta o acento como caracter
echo substr('só uma parte mesmo', 7, 6) . '<br>'; // parte
echo str_replace('isso', 'aquilo', 'Trocar isso e isso');