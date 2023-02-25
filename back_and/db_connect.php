<?php

$localhost = "localhost";
$nome = "root";
$senha = "poderoso22";
$db = "db_curso";

$connect = new mysqli($localhost,$nome,$senha,$db);

if($connect->connect_error)
{
    echo "erro";
}
else
{
   
}

?>