<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
       h1
{
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
    color: #0d6efdff;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
}

button
{
    position: absolute;
    top: 70%;
    left:50%;
    transform: translate(-50%,-50%);
    color: #0d6efdff;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
}
    </style>
</head>

</html>

<?php

require_once "db_connect.php";
if($_POST)
{
    $nome = $_POST["nome_aluno"];
    $email = $_POST["email_aluno"];
    $senha = $_POST["senha_aluno"];

    $sql = "INSERT INTO aluno VALUES (null, '$nome','$email','$senha')";

    if($connect->query($sql) == TRUE)
    {
        echo "<h1><b>cadastro realizado com sucesso</b></h1><br>";
        echo "<a href='../login.php'><button class='btn btn-primary'>"."VOLTAR"."</button></a>";

    }
}



?>