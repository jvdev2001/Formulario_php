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
        <label for="">SEXO:</label>
        <select name="sexo" value =<?=$sexo ?? ''?>>
            <?php foreach($opcaoSexo as $sexo ):?>
                <option value=<?=$sexo?>><?=$sexo?></option>
            <?php endforeach?>
        </select>
        <br>
        <label for="">ENDEREÇO:</label>
        <input type="text" name = "Endereco">
        <br>
        <label for="">Nº:</label>
        <input type="text" name = "Numero">
        <br>
        <label for="">ESTADO CIVIL:</label>
        <br>
        <?php foreach($opcaoEstadoCivil as $estadoCivil):?>
            <label for=""><?=$estadoCivil?></label>
            <input type="checkbox"
            <?php
            if(in_array($estadoCivil ,   $estadoCivilSelecionado)){
                echo 'checked';
            }
            ?>
             name="estadoCivil[]" value=<?=$estadoCivil?>>
        <?php endforeach?>
        <br>
        <label for="">CPF:</label>
        <input type="text" name ="cpf">
        <br>
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