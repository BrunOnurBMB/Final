<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>insira o conteudo para um formulario aqui</h1>
    <form action="criarArquivo.php" method="post">

        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo" placeholder="codigo"><br><br>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="nome"><br><br>

        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" placeholder="categoria" ><br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao"  placeholder="desrição"><br><br>

        <button type="submit">Gravar</button>

    </form>
</body>
</html>