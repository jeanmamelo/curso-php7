<div class="titulo">Desafio operadores lógicos</div>

<!--
    Dois trabalho: terça e quinta
    - Se os dois trabalhos forem executados -> TV 50' e sorvete
    - Se apenas um dos trabahos for executado -> TV 32' e sorvete
    - Se nenhum for executado -> fica em casa e mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça-feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta-feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 0.8rem;
    }
</style>

<?php
/**
 * Minha resposta
 */
echo "<p class='divisao'>Minha resposta</p><hr>";
if (isset($_POST['t1']) && isset($_POST['t2'])) {
    echo "Trabalho 1: {$_POST['t1']}<br>";
    echo "Trabalho 2: {$_POST['t2']}<br>";

    echo '<br>';

    if ($_POST['t1'] and $_POST['t2']) {
        echo "Compra a TV de 50' e toma sorvete<br>";
    } elseif ($_POST['t1'] or $_POST['t2']) {
        echo "Compra a TV de 32' e toma sorvete<br>";
    } else {
        echo "Fica em casa e mais saudável<br>";
    }
}

/**
 * Resposta do professor
 */
echo "<p class='divisao'>Resposta do professor</p><hr>";
if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = "";
    $sorvete = false;

    echo "Trabalho 1: {$_POST['t1']}<br>";
    echo "Trabalho 2: {$_POST['t2']}<br>";

    if ($t1 && $t2) {
        $tv = "50'";
    } elseif ($t1 xor $t2) {
        $tv = "32'";
    }

    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv.<br>";
    } else {
        $resultado = "Sem TV dessa vez :(<br>";
    }

    $saudavel = !$sorvete;

    if ($saudavel) {
        $resultado .= "Estamos mais saudáveis.<br>";
    } else {
        $resultado .= "Sorvete liberado. \o/<br>";
    }

    echo "<p>$resultado</p>";
}
