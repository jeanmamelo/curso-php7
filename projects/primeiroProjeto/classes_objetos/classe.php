<div class="titulo">Primeira classe</div>

<?php
class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    // metodos
    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 27;

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

$c3 = new Cliente;
$c3->nome = 'Jean';
$c3->idade = 25;

echo $c1->apresentar(), '<br>';
echo $c2->apresentar(), '<br>';
echo $c3->apresentar();