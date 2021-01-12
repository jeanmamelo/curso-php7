<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input placeholder="Nome" type="text" name="nome">
    <input placeholder="Sobrenome" type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.4rem;
    }
</style>

<?php
echo 'GET => ';
print_r($_GET);
echo '<br>';
echo 'POST => ';
print_r($_POST);
$combinacao = $_GET + $_POST;
echo '<br>';

echo '<br>' . count($_POST);
echo '<br>';

echo '<br>';
print_r($combinacao);