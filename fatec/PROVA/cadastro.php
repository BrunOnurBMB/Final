<?php

include('funcoes.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="validacao.php" method="post">

<label for="descricao">codigo</label>
<input type="text" name="codigo"><br><br>

<label for="codigo">categoria</label>
<input type="text" name="categorias" ><br><br>

<label for="descricao">Descrição:</label>
<input type="text" name="descricao"><br><br>

<button type="submit">Gravar</button>
</form>
</body>
</html>
