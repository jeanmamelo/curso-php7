<div class="titulo">Arrays constantes</div>

<?php
const FRUTAS = array("Laranja", "Abacaxi");
// FRUTAS[0] = "banana";
echo FRUTAS[0];

const CARROS = ["Fiat" => "uno", "Ford" => "fiesta"];
// CARROS["BMW"] = "325i";
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array("Belo Horizonte", "Recife"));
// CIDADES[] = "Rio de Janeiro";
echo '<br>' . CIDADES[1];