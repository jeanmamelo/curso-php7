<div class="titulo">Interface</div>

<?php
interface Animal
{
    function respirar();
}

interface Mamifero
{
    function mamar();
}

interface Canino extends Animal, Mamifero
{
    function latir($volume = 'alto...'): string;
}

interface Felino
{
    function correr();
}

class Cachorro implements Canino
{
    function respirar()
    {
        return 'Respirando...' . PHP_EOL;
    }
    
    function latir($volume = 'alto...'): string
    {
        return 'Latindo ' . $volume . PHP_EOL;
    }

    function mamar()
    {
        return 'Mamando...' . PHP_EOL;
    }

    function correr()
    {
        return 'Cachorro correndo...' . PHP_EOL;
    }
}

$animal = new Cachorro();
echo $animal->respirar();
echo '<br>';
echo $animal->latir();
echo '<br>';
echo $animal->mamar();
echo '<br>';
echo $animal->correr();
echo '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);
