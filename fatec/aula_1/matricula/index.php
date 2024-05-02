<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="gravar.php">
        <label for="cursos"> matricula
        <input type="radio" name="curso" id="cursos" value="Curso 1">CURSO1 <BR>
        <input type="radio" name="curso" id="cursos" value="Curso 2">CURSO2 <br>
        <input type="radio" name="curso" id="cursos" value="Curso 3">CURSO3 <br>
        <input type="text" name="nome" placeholder="nome">
        <input type="text" value="<?= $rand = rand(1,100) ?>" name="matricula">
                </label>
        <input type="submit" value="enviar" >
    </form>
</body>
</html>