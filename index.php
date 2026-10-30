<?php
require_once "formulario.php";
require_once "function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">NOME:</label>
        <input type="text" name = "nome" value =<?=$nome ?? ''?>>
        <br>
        <label for="">IDADE:</label>
        <input type="number" name="idade" value = <?=$idade ?? '' ?>> 
        <br>
        <label for="">EMAIL:</label>
        <input type="text"name = "email" value = <?=$email ?? '' ?>>
        <br>
        <label for="">Sexo</label>
        <select name="sexo">
        <option value="masculino">MASCULINO</option>
        <option value="femenino">FEMENINO</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php if(ExibirMensagem($mensagemSucesso)):?>
        <p style ="color:green">
            <?=$mensagemSucesso ?>
        </p>
    <?php endif?>

    <?php if(ExibirMensagem($mensagemErro)):?>
        <p style ="color:red">
            <?=$mensagemErro?>
        </p>
    <?php endif?>


</body>
</html>