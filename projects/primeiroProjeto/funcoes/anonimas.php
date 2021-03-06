<div class="titulo">Funções anônimas</div>

<?php
$soma = function ($a, $b)
{
    return $a + $b;
};

echo $soma(1, 2) . "<br>";

function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b) ?? "Sem retorno";
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, "+", $soma);

$multiplicacao = function ($a, $b)
{
    return $a * $b;
};

executar(2, 3, "*", $multiplicacao);

function divisao($a, $b)
{
    return $a / $b;
}

executar(9, 3, "/", @divisao);

########## personal tests ##########

$teste2 = "BRA";

if (isset($_POST['teste']))
{
    $teste2 = $_POST['teste'];
}

echo "<br> $teste2";
?>

<div>
    <form action="#" method="post">
        <input type="text" name="teste" id="teste" required>
        <button>Enviar</button>
    </form>
</div>