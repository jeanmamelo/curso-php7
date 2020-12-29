<div class="titulo">Desafio switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">1 KM => 0.621371 Milhas</option>
        <option value="milha-km">1 Milha => 1.60934 KM</option>
        <option value="metro-km">1 Metros => 0.001 KM</option>
        <option value="km-metro">1 KM => 1000 Metros</option>
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

if ($input) {
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

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param milhas = $distancia KM";
        break;
    case 'metro-km':

        break;
    case 'km-metro':

        break;
    default:
        "<br>Digite um número válido para ser convertido";
}
