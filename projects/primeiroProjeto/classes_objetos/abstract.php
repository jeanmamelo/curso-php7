<div class="titulo">Classe abstrata</div>

<?php
abstract class Abstrata
{
    public abstract function method1Name();
    abstract public function method2Name($parameter);

    protected abstract function method3Name();
    abstract protected function method4Name($parameter);

    // private abstract function method5Name(); // não é uma possibilidade
    // abstract private function method6Name($parameters); // não é uma possibilidade
}

abstract class FilhaAbstrata extends Abstrata
{
    public function method1Name()
    {
        echo "Executando o método 1<br>";
    }

    abstract public function method7Name();
}

class Concreta extends FilhaAbstrata
{
    public function method1Name()
    {
        echo "Executando o método 1 extendido<br>";
        parent::method1Name();
    }

    public function method2Name($parameter)
    {
        echo "Executando o método 2, com o parâmetro: $parameter<br>";
    }

    public function method3Name()
    {
        echo "Executando o método 3 extendido<br>";
    }

    public function method4Name($parameter)
    {
        echo "Executando o método 4, com o parâmetro: $parameter<br>";
    }

    public function method7Name()
    {
        echo "Executando o método 7 extendido<br>";
        $this->method2Name('interno');
    }
}

$c = new Concreta();
$c->method1Name();
// $c->method2Name('externo');

echo 'Fim';