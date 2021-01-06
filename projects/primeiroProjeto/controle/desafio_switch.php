<div class="titulo">Desafio switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM => Milha</option>
        <option value="milha-km">Milha => KM</option>
        <option value="metro-km">Metro => KM</option>
        <option value="km-metro">KM => Metro</option>
        <option value="f-c">°F => °C</option>
        <option value="c-f">°C => °F</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 0.8rem;
    }
</style>

<?php
/**
 * Minha resposta
 */
echo "<p class='divisao'>Minha resposta</p><hr>";
$input = $_POST['param'];
$conversao = $_POST['conversao'];

if (isset($input)) {
    switch (strtolower($conversao)) {
        case 'km-milha':
            $conversao = $input * 0.621371;
            $unidadeInput = "KM";            
            $unidadeConversao = $conversao == 1 ? "milha" : "milhas";            
            
            echo "<br>$input $unidadeInput = $conversao $unidadeConversao";
            break;
        case 'milha-km':
            $conversao = $input * 1.60934;
            $unidadeInput = $input == 1 ? "milha" : "milhas";
            $unidadeConversao = "KM";
            
            echo "<br>$input $unidadeInput = $conversao $unidadeConversao";
            break;
        case 'metro-km':
            $conversao = $input * 0.001;
            $unidadeInput = $input == 1 ? "metro" : "metros";
            $unidadeConversao = "KM";
            
            echo "<br>$input $unidadeInput = $conversao $unidadeConversao";
            break;
        case 'km-metro':
            $conversao = $input * 1000;
            $unidadeInput = "KM";
            $unidadeConversao = $conversao == 1 ? "metro" : "metros";
            
            echo "<br>$input $unidadeInput = $conversao $unidadeConversao";
            break;
        case 'f-c':
            $conversao = (($input - 32) * 5) / 9;
            $unidadeInput = "fahrenheit";
            $unidadeConversao = "celsius";
            
            echo "<br>{$input}° $unidadeInput = {$conversao}° $unidadeConversao";
            break;
        case 'c-f':
            $conversao = (($input * 9) / 5) + 32;
            $unidadeInput = "celsius";
            $unidadeConversao = "fahrenheit";
            
            echo "<br>{$input}° $unidadeInput = {$conversao}° $unidadeConversao";
            break;
        default:
            "<br>Digite um número válido para ser convertido";
    }
}

/**
 * Resposta do professor
 */
echo "<p class='divisao'>Resposta do professor</p><hr>";
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM(s) = $distancia milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param milha(s) = $distancia KM(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param metro(s) = $distancia KM(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM(s) = $distancia metro(s)";
        break;
    case 'f-c':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° fahrenheit = {$conversao}° celsius";
        break;
    case 'c-f':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° celsius = {$conversao}° fahrenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";