<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
</head>
<body>

<form action="consultacliente.php" method="POST">
    Digite um nome completo: <br/>
    <input type="text" name="cxpesquisa"> <br/>
    <input type="submit" value="Pesquisar">




</form>

    <form action="inserirprofessor.php" method="POST">
    Professor:<br/>
    <input type="text" name="prof"><br/>
    Materia:<br/>
    <input type="text" name="mat"><br/>
    Curso:<br/>
    <input type="text" name="curs"><br/>
    <input type="submit" value="Enviar">


    </form>
</body>
</html>