<?php

include('funcoes.php');

$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$categorias = $_POST['categorias'];
$nome_arquivo = './cadastros/cliente-' . $codigo . '.json';
$msg = '';


if (strlen($codigo) == 0) {
    $msg .= 'O codigo tem que ser preenchido <br>';
}
if (strlen($codigo) !== 4 ) {
    $msg .= 'O codigo tem que ter apenas 4 digitos <br>';
}
if (!is_numeric($codigo)) {
    $msg .= 'O codigo tem que ser apenas numerico <br>';
}
if ($descricao == '') {
    $msg .= 'A descricao tem que ser preenchida <br>';
}
if (strlen($descricao) < 5) {
    $msg .= 'Informe uma descrição valida! <br>';
}
if ($categorias == '') {
    $msg .= 'A categoria tem que ser preenchida <br>';
}
if (file_exists($nome_arquivo)) {
    $msg .= 'Codigo ja existente, insira outro <br>';
}
if ($msg != '') {
    echo $msg;
    exit;
}

define('DIRETORIO_CADASTRO', './cadastros');

if (!file_exists(DIRETORIO_CADASTRO))
    mkdir(DIRETORIO_CADASTRO);

$arquivo = $codigo;

EscreverArquivo($arquivo);

header('location: index.php');