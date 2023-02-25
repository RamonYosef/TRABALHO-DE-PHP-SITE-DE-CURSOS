<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina_inicial do adm</title>
    <link rel="stylesheet" href="css/pagina_inicial_adm.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="img/Captura_de_tela_2023-02-19_151028-removebg-preview.ico" type="image/x-icon">


<style>
    #login_1
{
    position: absolute;
    top: 50%;
    left: 90%;
    transform: translate(-50%,-50%);
    
}

#login_1:hover
{
    color:#009c67b2;
}


#login_2
{
    position: absolute;
    top: 50%;
    left: 75%;
    transform: translate(-50%,-50%);
}
#login_2:hover
{
    color:#009c67b2;
}


#login_3
{
    position: absolute;
    top: 50%;
    left: 57%;
    transform: translate(-50%,-50%);
}

#login_3:hover
{
    color:#009c67b2;
}

#box_menu
{
    position: absolute;
    width: 100%;
    height: 10%;
    background-color: #009c67b2;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    align-items: center;
}


#box_tabela
{
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%,-50%);
    border-radius: 15px;
    width: 500px;
    height: 500px;
    margin-left: auto;
    margin-right: auto;
}

#tabela
{
    position: fixed;
    width: 500px;
    height: 500px;
    border: 3px solid #009c67b2;
    border-radius: 15px;
}

td
{
    border: none;
}

b
{
    color:  #009c67b2;
}

#b
{
    color:  white;
}

#txt
{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    color: #009c67b2;
}

th
{
    border: 3px solid  #009c67b2;
}
</style>
</head>
<body>
<div id="pdf">
<div id="box_menu">
        <center><h1 id="titulo_1"><b id="b">CURSOS_ONLINE</b></h1></center>

        <a href="relatorio.php"><button  class="btn btn-outline-light" id="login_2">RELATORIO_ALUNOS</button></li></a>
        <a href="formulario_curso.php"><button class="btn btn-outline-light" id="login_3">REGISTRA-SE_CURSO</button></li></a>
        <a href='back_and/close_adm.php'><button class='btn btn-outline-light' id='login_1'>SAIR</button></a>    
        </div>

       
        
</body>
</html>
<?php
session_start();

$email = $_SESSION["email_adm"];

if((! isset($_SESSION["email_adm"]) == TRUE ) and (! isset($_SESSION["senha_adm"]) == TRUE))
{
    header("location: login_adm.php");
}

require_once "back_and/db_connect.php";

$email = $_SESSION["email_adm"];

$sql_2 = "SELECT * FROM adm WHERE email_adm = '$email'";

$result_1 = $connect->query($sql_2);

if($result_1->num_rows > 0)
{
    while($row = $result_1 -> fetch_assoc()){
    echo "<h1 id='txt'><b>SEUS CURSOS ".$row["nome_adm"]."</b></h1>";
    }
}


?>
<?php

require_once "back_and/db_connect.php";


$sql = "SELECT c.nome_curso, c.valor_curso, c.vagas_ocupadas, a.email_adm,
        c.tipos_curso, c.vagas_curso, a.nome_adm FROM curso as c, adm as a WHERE
        c.id_adm = a.id_adm and a.email_adm = '$email'";


$result = $connect->query($sql);

echo "<div id='box_tabela'>";
echo "<table  class='table table-striped' id='tabela'>";
if($result->num_rows > 0){
    
   
    
    while($row = $result -> fetch_assoc()){
        echo "<thead><tr><th><center><h1><b>".$row['nome_curso']."</b></h1></center></th></tr></thead>";
        echo "<tbody>
                     <tr><td><center><b>Valor do curso</b></center></td></tr>
                     <tr><td><center>".$row["valor_curso"]."</center></tr></td>

                     <tr><td><center><b>Vagas do curso</b></center></td></tr>
                     <tr><td><center>".$row["vagas_curso"]."</center></td></tr>

                     <tr><td><center><b>Tipo do curso</b></center></td></tr>
                     <tr><td><center>".$row["tipos_curso"]."</center></tr></td>

                     <tr><td><center><b>Vagas preenchidas do curso</b></center></td></tr>
                     <tr><td><center>".$row['vagas_ocupadas']."</center></td></tr>

                     <tr><td><center><b>Criado do curso</b></center></td></tr>
                     <tr><td><center>".$row["nome_adm"]."</center></td></tr>

              </tbody>";

             
    }
    echo "</table>";
    echo "</div>";
}




?>