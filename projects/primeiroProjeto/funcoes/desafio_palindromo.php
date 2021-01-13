<div class="titulo">Desafio palíndromo</div>

<?php
function palindromoFor($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for ($i=0; $i <= $ultimoIndice; $i++) { 
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não";
        }
    }
    return "Sim";
}

echo palindromoFor("ovo") . "<br>";
echo palindromoFor("ana") . "<br>";
echo palindromoFor("abccba") . "<br>";
echo palindromoFor("bola") . "<br>";
echo "<br>";

function palindromoSimples($palavra) {
    return (strrev($palavra) === $palavra) ? "É palíndromo" : "Não é palíndromo";
}

echo palindromoSimples("ovo") . "<br>";
echo palindromoSimples("ana") . "<br>";
echo palindromoSimples("abccba") . "<br>";
echo palindromoSimples("bola") . "<br>";
echo "<br>";

function palindromo($palavra) {
    if(strrev($palavra) === $palavra) {
        return "É palíndromo";
    } else {
        return "Não é palíndromo";
    }
}

echo palindromo("ovo") . "<br>";
echo palindromo("ana") . "<br>";
echo palindromo("abccba") . "<br>";
echo palindromo("bola") . "<br>";