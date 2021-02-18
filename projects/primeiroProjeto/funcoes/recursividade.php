<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero)
{
    $soma = 0;
    for (; $numero >= 1 ; $numero--)
    {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . ' -> somaUmAte <br>';

function somaUmAte1($numero)
{
    $soma = 0;
    for ($i = 1; $i <= $numero ; $i++)
    {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte1(5) . ' -> somaUmAte1 <br>';

function somaRecursivaUmAte($numero)
{
    // condição de parada
    if ($numero === 1) {
        return $numero;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(5) . ' -> somaRecursivaUmAte <br>';

function somaRecursivaUmAte1($numero)
{
    // condição de parada
    if ($numero === 1) return $numero;
    return $numero + somaRecursivaUmAte1($numero - 1);
}

echo somaRecursivaUmAte1(5) . ' -> somaRecursivaUmAte1 <br>';

function somaRecursivaEconomicaUmAte($numero)
{
    return $numero === 1 ? $numero : $numero + somaRecursivaEconomicaUmAte($numero - 1);
}

echo somaRecursivaEconomicaUmAte(5) . ' -> somaRecursivaEconomicaUmAte <br>';