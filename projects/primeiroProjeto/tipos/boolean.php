<div class="titulo">Tipo boolean</div>

<?php
echo true;
echo '<br>';
echo false . "0"; // se false, o retorno é 0, mas não aparece
echo '<br>';

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo is_bool('true') . "0"; // se false, o retorno é 0, mas não aparece
echo '<br>' . is_bool(true);

// fazer as regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool)  - 1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // todo o restante é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>';
echo '<br>' . var_dump((bool) !"false");
echo '<br>' . var_dump((bool) !!"false");