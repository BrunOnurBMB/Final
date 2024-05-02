<?php

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];



$dados = [
    'codigo' => $codigo,
    'nome' => $nome,
    'sexo' => $sexo
];

$json = json_encode($dados);

$nome_arquivo = "banco/$codigo.json";

$recurso = fopen($nome_arquivo, 'a+');

fwrite($recurso, $json);

fclose($recurso);




