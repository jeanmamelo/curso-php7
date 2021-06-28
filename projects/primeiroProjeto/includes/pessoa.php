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