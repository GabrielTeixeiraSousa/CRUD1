<?php
    include_once "factory/conexao.php";

    $cod = $_GET["id"];




    $consulta = "select * from tbcliente where nome = '$cod' ";
    $executar = mysqli_query($conn,$consulta);
    $campos = mysqli_fetch_array($executar);
    
        

?>

<form action="" method="POST">




Codigo:<br/>
<input type="text" value=""<?php echo $campos['codigo']?> disable/><br/>

Nome:<br/>
<input type="text" value="<?php echo $campos["nome"]?>"/><br/>
Idade:<br/>
<input type="text" value="<?php echo $campos["idade"]?>"/><br/>
Email:<br/>
<input type="text" value="<?php echo $campos["email"]?>"/><br/>
