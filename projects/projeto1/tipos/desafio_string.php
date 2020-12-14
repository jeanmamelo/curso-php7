<div class="titulo">Desafio string</div>

<style>
    [correta] {
        color: rgb(0, 255, 0);
    }
</style>

<?php 
    /**
     * Enunciado:
     * Avaliando os métodos da documentação da string, 
     * qual é o método que vai pegar a posição do texto 
     * 'abc' na string '!AbcaBcabc' e retorne 1?
     */

    echo strpos('!AbcaBcabc', 'abc') . '<br>';
    echo '<span correta>' . stripos('!AbcaBcabc', 'abc') . '</span><br>';

    echo strpos(strtolower('!AbcaBcabc'), strtolower('aBC'));