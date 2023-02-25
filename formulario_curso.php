

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário_curso</title>
    <link rel="stylesheet" href="css/formulario_curso.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="img/Captura_de_tela_2023-02-19_151028-removebg-preview.ico" type="image/x-icon">
    <style>
        #txt_1
{
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #009c67b2;
}


#txt_tipos
{
    width: 220px;
}
    </style>
</head>
<body>
    
    <img src="img/Captura de tela 2023-02-17 100829.png" alt="" id="img">
   

        <div id="box_menu">
        <center><h1 id="titulo_1"><b>CURSOS_ONLINE</b></h1></center>

        <a href="pagina_inicial_adm.php"><button class="btn btn-outline-light" id="login_1">VOLTAR</button></li></a>
           
        </div>

    <div id="box">
       <center><h1 id="titulo">FORMULÁRIO CURSO</h1></center> 
       <br>
        <form action="back_and/create_curso.php" method="post">
            <center><input type="text" name="nome_curso" placeholder="NOME DO CURSO" class="form-control" id="input"></center>
            <br><br>
           <center><input type="text" name="valor_curso" placeholder="VALOR DO CURSO" class="form-control" id="input"></center> 
            <br><br>
           <center><input type="text" name="vagas_curso" placeholder="VAGAS DO CURSO" class="form-control" id="input"></center> 
            <br><br>
            <center><label for="" id="txt_1"><b>CRIADOR DO CURSO</b></label></center>
            <select name="id_adm" class="form-select">
                        <?php
                        require_once "back_and/db_connect.php";
                        $sql = "SELECT * FROM adm";
 
 
                        $result = $connect -> query($sql);
 
                        if($result -> num_rows > 0)
                            {
                            while($row = $result -> fetch_assoc())
                            {

                            echo "<option value='".$row["id_adm"]."'>".$row["nome_adm"]."</option>";

                            }
                          }  
                        ?>
                        </select>
            <br><br>
            

            <center><input type="text" name = "tipos_curso" placeholder = "TIPOS DO SEU CURSO"  class="form-control" id='txt_tipos'></center>

     
            <br>
           <center><button type="submit" class="btn btn-success" id="botoes">ENVIAR</button></center>
        </form>
    </div>
</body>
</html>