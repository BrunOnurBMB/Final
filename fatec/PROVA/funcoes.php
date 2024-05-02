<?php
define('DIRETORIO_CADASTRO', './cadastros');

function EscreverArquivo($arquivo){
    $json = json_encode($_POST);
    $recurso = fopen(DIRETORIO_CADASTRO."/cliente-" . $arquivo . ".json", 'w');
    fwrite($recurso, $json);
    fclose($recurso);
}

function LerArquivo($arquivo){
    $resource = fopen(DIRETORIO_CADASTRO."/cliente-" . $arquivo . ".json", 'r');
    $dados = fread($resource, filesize($arquivo));
    fclose($resource);

    return $dados;
}


function Listagem($lista){
    $lista = opendir(DIRETORIO_CADASTRO);
    while($file = readdir($lista)){
        echo "Arquivo: $file <br>";
    }
    closedir($lista);
}

function ExcluirArquivo($arquivo){
    unlink(DIRETORIO_CADASTRO."/cliente-$arquivo.json");
}