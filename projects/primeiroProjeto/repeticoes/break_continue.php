<div class="titulo">Break/continue</div>

<?php
$cont = 16;
for (;;) {
    echo "$cont <br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "<br>";

for (;;) {
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}

foreach (array(1, 2, 3, 4, 5, 6) as $value) {
    if ($value === 5) {
        break;
    }

    if ($value % 2 === 0) {
        continue;
    }

    echo "$value <br>";
}

echo "Fim!";