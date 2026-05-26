<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>

<form action="consultacliente.php" method="POST">
    Digite um nome completo: <br/>
    <input type="text" name="cxpesquisa"> <br/>
    <input type="submit" value="Pesquisar">




</form>

    <form action="inserirproduto.php" method="POST">
        Produto:<br/>
        <input type="text" name="cxprod"/><br/>
        Quantidade:<br/>
        <input type="number" name="cxqtde"/><br/>
        Fabricante:<br/>
        <input type="text" name="cxfabri"/><br/>
        lote:<br/>
        <input type="number" name="cxlote"/><br/>
        <input type="submit" value="Gravar"/>

    </form>
</body>
</html>