<?php

$origem = 'banco';

$arquivos = scandir($origem);

foreach ($arquivos as $arquivo) {
    if ($arquivo != '.' && $arquivo != '..' ) {
        $nome_arquivo = "banco/$arquivo";

        $recurso = fopen($nome_arquivo, 'a+');

        $texto = fread($recurso, filesize($nome_arquivo));

        $conteudo = json_decode($texto, true);
        
        echo $conteudo['codigo'] . '<br>' . $conteudo['nome'] . '<br>'. $conteudo['sexo'] . '<br>'. '<br>';

        fclose($recurso);
    }


}




