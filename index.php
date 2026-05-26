<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Geral</title>
</head>
<body>

<form action="consultacliente.php" method="POST">
    Digite um nome completo: <br/>
    <input type="text" name="cxpesquisa"> <br/>
    <input type="submit" value="Pesquisar">




</form>


 <form action="inserircliente.php" method="POST">
    nome: <br/>
    <input type="text" name="cxnome"><br/>
    Idade: <br/>
    <input type="text" name="cxidade"><br/>
    e-mail: <br/>
    <input type="text" name="cxemail"/><br>
    <input type="submit" value="Gravar">




</form>
    
</body>
</html>