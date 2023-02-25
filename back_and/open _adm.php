<?php
session_start();

$email = $_POST["email_adm"];
$senha = $_POST["senha_adm"];


$con = new mysqli("localhost","root","poderoso22","db_curso");

$result = $con->query("SELECT * FROM adm WHERE email_adm = '$email' and senha_adm = '$senha'");

if(mysqli_num_rows ($result) > 0)
{
    $_SESSION["email_adm"] = $email;
    $_SESSION["senha_adm"] = $senha;
    header("location: ../pagina_inicial_adm.php");
}
else
{
    unset( $_SESSION["email_adm"]);
    unset( $_SESSION["senha_adm"]);
    header("location: ../login_adm.php");
}

?>