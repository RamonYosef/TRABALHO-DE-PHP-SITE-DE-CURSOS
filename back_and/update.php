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


session_start();

require_once "db_connect.php";

$email_aluno = $_SESSION['email_aluno'];

if($_POST)
{
    $nome = $_POST["nome_aluno"];
    $email = $_POST["email_aluno"];
    $senha = $_POST["senha_aluno"];

    $sql = "UPDATE aluno SET nome_aluno = '$nome', email_aluno = '$email', senha_aluno = '$senha'
     WHERE email_aluno = '$email_aluno'";

    if($connect->query($sql) == TRUE)
    {
        echo "<h1><b>cadastro modificado com sucesso, você tera que refazer o login !</b></h1><br>";
        echo "<a href='../login.php'><button>"."VOLTAR"."</button></a>";
    }
}


?>