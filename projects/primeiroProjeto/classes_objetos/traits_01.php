<div class="titulo">Traits #01</div>

<?php
trait validacao
{
    public $a = 'Valor a';

    public function validarString($str): bool
    {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor
{
    public $b  = 'Valor b';
    private $c = 'Valor c (privado)';

    public function validarStringMelhor($str)
    {
        return isset($str) && trim($str);
    }
}

class Usuario
{
    use validacao, validacaoMelhor;

    public function __construct()
    {
        
    }

    public function imprimirValorC()
    {
        echo '<br>';
        echo $this->c;
    }
}

// var_dump(validacao->validarString('')); // não consegue acessar atributos de uma trait diretamente

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a . '<br>' . $usuario->b;
echo $usuario->imprimirValorC();