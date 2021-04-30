<div class="titulo">Membros estáticos</div>

<?php
class A
{
    public $naoStatic = 'Variável de instância/objeto (não estática)';
    public static $static = 'Variável de classe (estática)';

    function mostrarA()
    {
        echo "Não estática => {$this->naoStatic}";
        echo '<br>';
        // 1ª tentativa
        // echo "Estática => {$this->static}";
        // echo '<br>';
        // 2ª tentativa
        // echo "Estática => {self::$static}";
        // echo '<br>';
        // 3ª tentativa
        echo "Estática => " . self::$static;
        echo '<br>';
    }

    public static function mostrarStaticA()
    {
        // echo "Não estática => {$this->naoStatic}";
        // echo '<br>';
        // echo "Estática => {$static}";
        // echo '<br>';
        echo "Estática => " . self::$static;
        echo '<br>';
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal acessar pela instância/objeto

echo '<br>';
echo A::$static; // forma ideal, acessar atributo static diretamente pela classe
echo '<br>';
A::mostrarStaticA(); // forma ideal, acessar método static diretamente pela classe

A::$static = 'Alterando membro de classe!';
echo A::$static; // forma ideal, acessar atributo static diretamente pela classe
