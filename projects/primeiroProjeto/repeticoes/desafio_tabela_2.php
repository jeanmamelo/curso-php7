<div class="titulo">Desafio tabela #02</div>

<form action="#" method="post">
    <div>
        <label for="lines">Linhas</label>
        <input placeholder="Número de linhas" type="number" value=<?=$_POST['lines'] ?? 10?> name="lines" id="lines">
        <label for="columns">Colunas</label>
        <input placeholder="Número de colunas" type="number" value=<?=$_POST['columns'] ?? 10?> name="columns" id="columns">
    </div>
    <button>Gerar tabela</button>
</form>

<table>
    <?php
        $lines   = intval($_POST['lines']) ?? 10;
        $columns = intval($_POST['columns']) ?? 10;

        if (!$lines) {
            $lines = 10;
        }

        if (!$columns) {
            $lines = 10;
        }

        $num = 1;
        for ($i = 0; $i < $lines; $i++)
        {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++)
            {
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    form * {
        font-size: 1.4rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>