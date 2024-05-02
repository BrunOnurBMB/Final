<?php

include('funcoes.php');

$codigo = $_GET['codigo'];

echo ExcluirArquivo($codigo);

header('location: index.php');