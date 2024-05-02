<?php

include('funcoes.php');

$diretorio = './cadastros';

    $recurso = opendir($diretorio);

    while ($file = readdir($recurso)) {
        if ($file == '.' || $file == '..') {

            continue;
        }
        $caminho = './cadastros/' . $file;

        $resource = fopen("./cadastros/$file", 'r');

        $dados = fread($resource, filesize($caminho));

        $cliente = json_decode($dados, true);

        $arrayClientes[] = $cliente;

        fclose($resource);
    }

    
    closedir($recurso);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="cadastro.php">adicionar produto</a>
    <table>
        <thead>
            <TR>
                <th>AÇÕES</th>
                <th>CODIGO</th>
                <th>DESCRIÇÃO</th>
                <th>CATEGORIA</th>
                <th>ARQUIVO JSON</th>
            </TR>
        </thead>
        <TBODy>
        <?php foreach ($arrayClientes as $clientes):?>
                    <tr>
                        <td><a href="detalhe.php?c=$file.json" target="_blank">clicaaaq</a>
                        <a href="deletar.php">APAGAR AQUI</a></td>
                        <td><?= $clientes['codigo'] ?></td>
                        <td><?= $clientes['descricao'] ?></td>
                        <td><?= $clientes['categorias'] ?></td>
                        <td><a href="#">oi</a></td>
                    </tr>
        <?php endforeach; ?>
        </TBODy>
    </table>
</body>
</html>
