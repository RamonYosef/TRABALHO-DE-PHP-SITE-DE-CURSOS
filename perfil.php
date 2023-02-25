<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina_inicial do adm</title>
    <link rel="stylesheet" href="css/formulario.css">

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
    color:#0d6efdff;
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
    color:#0d6efdff;
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
    color:#0d6efdff;
}

#box_menu
{
    position: absolute;
    width: 100%;
    height: 10%;
    background-color: #0d6efdff;
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
    height: 470px;
    border: 3px solid #0d6efdff;
    border-radius: 15px;
}

td
{
    border: none;
}

b
{
    color:  #0d6efdff;
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
    color: #0d6efdff;
}

th
{
    border: 3px solid  #0d6efdff;
}
</style>
</head>
<body>
<div id="pdf">
<div id="box_menu">
        <center><h1 id="titulo_1"><b id="b">CURSOS_ONLINE</b></h1></center>
        
        <a href='pagina_inicial.php'><button class='btn btn-outline-light' id='login_1'>VOLTAR</button></a>    
        </div>

       
        <h1 id='txt'><b>SEU PERFIL</b></h1>"
</body>
</html>
<?php
session_start();



if((! isset($_SESSION["email_aluno"]) == TRUE ) and (! isset($_SESSION["senha_aluno"]) == TRUE))
{
    header("location: login.php");
}


require_once "back_and/db_connect.php";

$email_aluno = $_SESSION['email_aluno'];
$sql = "SELECT * FROM aluno WHERE email_aluno = '$email_aluno'";


$result = $connect->query($sql);

echo "<div id='box_tabela'>";
echo "<table  class='table table-striped' id='tabela'>";
if($result->num_rows > 0){
   
   
    
    while($row = $result -> fetch_assoc()){
        echo "<thead><tr><th><center><h1><b>".$row['nome_aluno']."</b></h1></center></th></tr></thead>";
        echo "<tbody>
                     <tr><td><center><b>SEU EMAIL</b></center></td></tr>
                     <tr><td><center>".$row["email_aluno"]."</center></tr></td>

                     <tr><td><center><b>SUA SENHA</b></center></td></tr>
                     <tr><td><center>".$row["senha_aluno"]."</center></td></tr>

                     <tr><td><center><b>SEU ID</b></center></td></tr>
                     <tr><td><center>".$row["id_aluno"]."</center></tr></td>
                     
                     <tr><td><center><a href='edit.php?id='".$row['id_aluno']."' ><button class='btn btn-primary'>EDITAR</button></a></center></td></tr>

              </tbody>";

             
    }
    echo "</table>";
    echo "</div>";
}




?>
</body>
</html>