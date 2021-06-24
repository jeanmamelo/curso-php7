<div class="titulo">Include função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo()
{
    include 'include_arquivo.php'; // presente apenas no escopo da funcao carregarArquivo()

    echo $variavel;
    echo '<br>';
    echo soma(2, 5);
    echo '<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8);
// echo '<br>';
carregarArquivo();
echo "Variável = '{$variavel}'.";
var_dump($variavel);