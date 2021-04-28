<div class="titulo">Construtor & destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18)
    {
        echo "construtor invocado! <br>";
        $this->nome  = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'Uh, vai morreer!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $pessoa = new Pessoa(); // Problema

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaB = new Pessoa('Jean Melo');

$pessoaA->apresentar();
unset($pessoaA);

$pessoaB->apresentar();
$pessoaB = null;