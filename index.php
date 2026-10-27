<?php
require "formulario.php";
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
        <input type="text" name = "nome">
        <br>
        <label for="">IDADE:</label>
        <input type="number" name="idade">
        <br>
        <label for="">EMAIL:</label>
        <input type="text"name = "email">
        <br>
        <label for="">Sexo</label>
        <select name="sexo">
        <option value="masculino">MASCULINO</option>
        <option value="femenino">FEMENINO</option>
        </select>
        <button type="submit">Enviar</button>
    </form>

    <p><?=$nome?></p>
    <p><?=$idade?></p>
    <p><?=$email?></p>
    <p><?=var_dump($sexo)?></p>
</body>
</html>