<div class="titulo">Métodos mágicos</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo 'Construtor invocado.';
        echo '<br>';
        $this->nome  = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo '<br>';
        echo 'E morreu.';
    }

    public function __toString(): string
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this;
        echo '<br>';
    }

    public function __get($name)
    {
        echo "Lendo um atributo não declarado: {$name}";
        echo '<br>';
    }

    public function __set($name, $value)
    {
        echo "Alterando um atributo não declarado: {$name}/{$value}";
        echo '<br>';
    }

    public function __call($name, $arguments)
    {
        echo "Tentando executar o método: '{$name}'";
        echo ", com os parametros: ";
        print_r($arguments);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct()
$pessoa->apresentar(); // __toString()
echo $pessoa; // __toString()
echo '<br>';
$pessoa->nome = 'Reinaldo';

// acessa o método diretamente sem o __call()
$pessoa->apresentar();

$pessoa->nomeCompleto = 'Muito legal.'; // __set()
$pessoa->nomeCompleto; // __get()

// acessa o atributo diretamente sem o __get()
echo $pessoa->nome;

$pessoa->exec(1, 'teste', true, [1, 2, 3]); // __call() porque o método não existe no objeto

$pessoa = null; // __destruct()