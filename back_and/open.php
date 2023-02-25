<?php
session_start();

$email = $_POST["email_aluno"];
$senha = $_POST["senha_aluno"];

$con = new mysqli("localhost","root","poderoso22","db_curso");

$result = $con->query("SELECT * FROM aluno WHERE email_aluno = '$email' and senha_aluno = '$senha'");

if(mysqli_num_rows ($result) > 0)
{
    $_SESSION["email_aluno"] = $email;
    $_SESSION["senha_aluno"] = $senha;
    header("location: ../pagina_inicial.php");
}
else
{
    unset( $_SESSION["email_aluno"]);
    unset( $_SESSION["senha_aluno"]);
    header("location: ../login.php");
}

?>