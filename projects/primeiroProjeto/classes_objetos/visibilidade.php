<div class="titulo">Visibilidade</div>

<?php
class A
{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA()
    {
        echo "Class A) Public = {$this->publico}";
        echo '<br>';
        echo "Class A) Protected = {$this->protegido}";
        echo '<br>';
        echo "Class A) Private = {$this->privado}";
        echo '<br>';
    }

    protected function vaiPorHeranca()
    {
        echo 'Serei transmitido por herança!';
        echo '<br>';
    }

    private function naoMostrar()
    {
        echo 'Não vou imprimir!';
        echo '<br>';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

class B extends A
{
    public function mostrarB()
    {
        echo "Class B) Public = {$this->publico}";
        echo '<br>';
        echo "Class B) Protected = {$this->protegido}";
        echo '<br>';
        echo "Class B) Private = {$this->privado}";
        echo '<br>';
        parent::vaiPorHeranca();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();
// $b->naoMostrar();
