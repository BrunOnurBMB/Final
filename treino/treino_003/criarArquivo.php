<?php


$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$dados = [
    'codigo' => $codigo,
    'nome' => $nome,
    'categoria' => $categoria,
    'descricao' => $descricao
];

$json = json_encode($dados);

$nome_arquivo = "banco/$codigo.json";

$recurso = fopen($nome_arquivo, 'a+');

fwrite($recurso, $json);

fclose($recurso);