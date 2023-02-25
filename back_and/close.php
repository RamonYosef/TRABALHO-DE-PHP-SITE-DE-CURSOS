<?php

session_start();

if((! isset($_SESSION["email_aluno"]) == TRUE) and (! isset($_SESSION["senha_aluno"]) == TRUE))
{

}
else
{
    session_destroy();
    header("location: ../login.php");
}
?>