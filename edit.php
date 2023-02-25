<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PERFIL</title>
    <link rel="stylesheet" href="css/formulario.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="img/Captura_de_tela_2023-02-19_151028-removebg-preview.ico" type="image/x-icon">


</head>
<body>
   

        <div id="box_menu">
        <center><h1 id="titulo_1"><b>CURSOS_ONLINE</b></h1></center>

        <a href="perfil.php"><button class="btn btn-outline-light" id="login_1">VOLTAR</button></li></a>
           
        </div>

    <div id="box">
       <center><h1 id="titulo">EDITAR PERFIL</h1></center> 
       <br>
        <form action="back_and/update.php" method="post">
            <center><input type="text" name="nome_aluno" placeholder="NOME" class="form-control" id="input"></center>
            <br><br>
           <center><input type="text" name="email_aluno" placeholder="EMAIL" class="form-control" id="input"></center> 
            <br><br>
           <center><input type="password" name="senha_aluno" placeholder="SENHA" class="form-control" id="input"></center> 
            <br><br>
           <center><button type="submit" class="btn btn-primary" id="botoes">EDITAR</button></center>
        </form>
    </div>
</body>
</html>