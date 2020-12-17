<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\styles.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>
            <a href="index.php">Curso PHP</a>
        </h1>
        <h2>Visialização do Exercício</h2>        
    </header>
    <nav class="navegacao">
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php")
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R PHP Course © <?= date('Y'); ?>
    </footer>
</body>
</html>