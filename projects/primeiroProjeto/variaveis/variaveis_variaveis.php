<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA'; // $a => valorA, $$a => $valorA
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
echo "$epa {$$epa} {$$$epa}";