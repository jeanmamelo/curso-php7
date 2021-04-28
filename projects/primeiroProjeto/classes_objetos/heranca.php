<div class="titulo">Herança</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa criada com sucesso!' . PHP_EOL;
        echo '<br>';
    }

    function __destruct()
    {
        echo 'Pessoa destruída com sucesso!' . PHP_EOL;
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos" . PHP_EOL;
        echo '<br>';
    }
}

$p1 = new Pessoa('Teste', 42);
$p1->apresentar();


class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
//        $this->nome = $nome;
//        $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário criado com sucesso!' . PHP_EOL;
        echo '<br>';
    }

    function __destruct()
    {
        echo 'Usuário destrído com sucesso!' . PHP_EOL;
        echo '<br>';
        parent::__destruct();
    }

    public function apresentar()
    {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gustavo Guanabara', 40, 'guanabara');
$usuario->apresentar();

unset($usuario);