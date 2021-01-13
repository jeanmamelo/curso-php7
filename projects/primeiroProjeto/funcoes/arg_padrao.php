<div class="titulo">Argumento padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = "Cliente") {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(NULL, NULL);
echo saudacao("Mestre", "Supremo");

echo "<br>";

function anotarPedido($comida, $bebida = "Água") {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Hamburguer");
anotarPedido("Pizza", "Refrigerante");

echo "<br>";

function anotarPedido2($bebida = "Água", $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2("Hamburguer"); // Expected 2 arguments. Found 1.
anotarPedido2("Refrigerante2", "Pizza2");