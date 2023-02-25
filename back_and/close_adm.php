<?php

session_start();

if((! isset($_SESSION["email_adm"]) == TRUE) and (! isset($_SESSION["senha_adm"]) == TRUE))
{

}
else
{
    session_destroy();
    header("location: ../login_adm.php");
}
?>