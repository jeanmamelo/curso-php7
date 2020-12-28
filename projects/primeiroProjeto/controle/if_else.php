<div class="titulo">If e else</div>

<?php
if (true)
{
    echo "Serei impresso?<br>";
}

echo '<br>';

if (false) {
    echo "Verdadeiro - parte a<br>";
    echo "Verdadeiro - parte b<br>";
} else {
    echo "Falso - parte a<br>";
    echo "Falso - parte b<br>";
}

echo '<br>';

if (false) {
    echo "Passo a<br>";
} elseif (false) {
    echo "Passo b<br>";
} elseif (false) {
    echo "Passo c<br>";
} elseif (false) {
    echo "Passo d<br>";
} elseif (false) {
    echo "Passo e<br>";
} else {
    echo "Último passo<br>";
}

echo '<br>';

echo "Fim";