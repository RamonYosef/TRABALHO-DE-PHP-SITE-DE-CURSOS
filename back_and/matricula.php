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
if($_GET['id']){
    $id = $_GET['id'];
  

session_start();


require_once "db_connect.php";
                


$email = $_SESSION["email_aluno"];


$sql_1 = "SELECT * FROM aluno where email_aluno = '$email'";



$result_1 = $connect->query($sql_1);

if($result_1->num_rows > 0)
{
while($row = $result_1 -> fetch_assoc()){

$aluno = $row["id_aluno"];

$sql_cd = "SELECT * FROM matricula WHERE id_aluno = '$aluno' and id_curso = '$id'";
$result=$connect->query($sql_cd);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<h1><b>ALUNO JA CADASTRADO</b></h1><br>";
echo "<a href=' ../pagina_inicial.php'><button class='btn btn-primary'>"."VOLTAR"."</button></a>";

    }
}   
else
{



$id_curso = $_GET["id"];

$sql = "INSERT INTO matricula VALUES (null, '$id','$aluno')";

if($connect->query($sql) == TRUE)
{
echo "<h1><b>matricula realizada com sucesso</b></h1><br>";
echo "<a href=' ../pagina_inicial.php'><button class='btn btn-primary'>"."VOLTAR"."</button></a>";

}



$sql_2 = "UPDATE curso SET vagas_ocupadas = vagas_ocupadas + 1 where id_curso = '$id' ";

$sql_3 = "UPDATE curso SET vagas_curso = vagas_curso - 1 where id_curso = '$id' ";

if($connect->query($sql_2) == TRUE)
{}

if($connect->query($sql_3) == TRUE)
{}


}
}
}
}
?>