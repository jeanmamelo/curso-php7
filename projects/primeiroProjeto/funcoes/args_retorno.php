<div class="titulo">Argumentos & retorno</div>

<?php
function obterMensagem() {
    return "Seja bem vindo(a)!";
}

obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;

echo "<br>";
echo "<br>", obterMensagem();

var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Seja bem vindo(a), {$nome}!";
}

echo obterMensagemComNome('Wagner');
echo "<br>";
echo obterMensagemComNome('Tiago');

function soma($numero1, $numero2) {
    return $numero1 + $numero2;
}

$x = 4;
$y = 5;
echo "<br>";
echo "<br>", soma(45, 78);
echo "<br>", soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo "<br>";
echo "<br>", $variavel;

function trocaValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValorDeVerdade($variavel, 5000);
echo "<br>";
echo "<br>", $variavel;