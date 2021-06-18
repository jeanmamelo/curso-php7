<div class="titulo">Modificador final</div>

<?php
abstract class Abstrata1
{
    public abstract function metodo1();

    public final function metodo2()
    {
        echo "Eu não vou mudar!<br>";
    }
}

class Classe1 extends Abstrata1
{
    public function metodo1()
    {
        echo "Executando o método 1<br>";
    }

    // public function metodo2()
    // {
    //     echo "Executando o método 2<br>";
    // }
}

$classe = new Classe1();
$classe->metodo1();
$classe->metodo2();



final class Unica
{
    public $att1 = 'Valor único!';
}

$unica = new Unica();
echo $unica->att1;

// class Duplicata extends Unica
// {
//     public $att2;
// }