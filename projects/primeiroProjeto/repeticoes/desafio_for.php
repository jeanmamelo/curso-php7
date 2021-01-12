<div class="titulo">Desafio for</div>

<!-- 
    Gerar com o for:
#
##
###
####
#####
    1. versão com operações de incremento ($i++)
    2. versão sem operações de incremento ($i++)
 -->

<?php

$array = '';

for ($i = 0; $i < 5; $i++) { 
    $array .= "#";
    echo "$array <br>";
}

echo "<br>";

for ($array2 = "#"; $array2 !== "######"; $array2 .= "#") { 
    echo "$array2 <br>";
}