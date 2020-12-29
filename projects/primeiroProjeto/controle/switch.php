<div class="titulo">Switch</div>

<?php
$categoria = "Luxo";
$preco = 0.0;
$carro = "";

if ($categoria === "Luxo") {
    $carro = "Mercedes";
    $preco = 250000;
} elseif ($categoria === "SUV") {
    $carro = "Renegade";
    $preco = 80000;
} elseif ($categoria === "Sedan") {
    $carro = "Etios";
    $preco = 55000;
} elseif ($categoria === "Popular") {
    $carro = "Mobi";
    $preco = 33000;
} else {
    $carro = "";
    $preco = 0;
}

$precoFormatado = number_format($preco, 2, ',', '.');
$mensagem = $carro ? "<p>Carro: $carro<br>Preço: R$$precoFormatado</p>" : "<p>Categoria não identificada</p>";
echo $mensagem;

$categoria = "suv";
switch (strtolower($categoria)) {
    case 'luxo': {
        $carro = "Mercedes";
        $preco = 250000;
        break;
    }
    case 'suv':
    case 'suv básico':
        $carro = "Renegade";
        $preco = 80000;
        break;
    case 'sedan':
        $carro = "Etios";
        $preco = 55000;
        break;
    case 'popular':
        $carro = "Mobi";
        $preco = 80000;
        break;
    default:
        $carro = "";
        $preco = 0;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
$mensagem = $carro ? "<p>Carro: $carro<br>Preço: R$$precoFormatado</p>" : "<p>Categoria não identificada</p>";
echo $mensagem;