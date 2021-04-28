<div class="titulo">Desafio classe data</div>

<?php
/**
 * minha solução
 */
class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar() {
        return "$this->dia/$this->mes/$this->ano";
    }
}

$d1 = new Data;
echo $d1->apresentar(), '<br>';
$d1->dia = 20;
$d1->mes = 10;
$d1->ano = 2020;
echo $d1->apresentar(), '<br>';
echo '<br>';

/**
 * solução do professor
 */
class Data2 {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data2;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;
echo $aniversario->apresentar();
echo '<br>';

$casamento = new Data2();
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;
echo $casamento->apresentar();
echo '<br>';
