<?php

require_once 'pessoa.php';

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    public function apresentar()
    {
        return "@{$this->login}: " . parent::apresentar();
    }
}