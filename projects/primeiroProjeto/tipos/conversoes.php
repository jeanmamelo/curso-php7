<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX);

    // int para float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    
    // float para int
    echo '<p>Float para int</p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump(intval(3.4, 10));
    echo '<br>';
    var_dump(intval(intval(2.999)));
    echo '<br>';
    var_dump(intval('11010101101', 2));
    echo '<br>';
    var_dump((int) round(2.8));
    
    // operacoes com string
    echo '<p>Strings</p>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + "2");
    echo '<br>';
    var_dump(3 . "2");
    echo '<br>';
    echo is_string("3" . 2);
    echo '<br>';
    echo is_string("3" + 2) . "não reconhece"; // não é uma string, é uma soma e o resultado é 5
    echo '<br>';
    var_dump(1 + "cinco"); // faz o var_dump(1) e ignora o "cinco"
    echo '<br>';
    var_dump(1 + "5 cinco"); // não reconhece, porém a soma será feita e o resultado é 6
    echo '<br>';
    var_dump(1 + "cinco 5"); // faz o var_dump(1) e ignora o "cinco"
    echo '<br>';
    var_dump(1 + "2+5"); // procura no começo da string e soma, no caso: 1 + 2 = 3
    echo '<br>';
    var_dump(1 + "3.2");
    echo '<br>';
    var_dump(1 + "-3.2e2");
    echo '<br>';
    var_dump((int) "10.5");
    echo '<br>';
    var_dump((float) "10.5");