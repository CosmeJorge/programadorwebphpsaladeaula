<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
    <p> Escreva um programa que leia, a idade e o sexo de uma pessoa.
    O programa deverá imprimir as informações. </p>

    <h3>Cadastro de Usuário</h3>
   <?php 
   $login = $_POST["login"];
   $senha = $_POST["senha"];
   $perfil = $_POST["perfil"];

   echo "<h3>Informações do Usuário</h3>";

   echo "Login: $login, senha $senha, perfil $perfil";
   ?>
   <br>
   <br>
   <a href="prog6.php"> <h3>Voltar</h3></a>
    </div>
</body>
</html>