<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Senac - Curso de PHP - Prog 5</title>
</head>
<body>
<div>
	<br/>
    <p>
    Escreva um programa que leia nome, idade e sexo de uma pessoa.
    O programa deverá imprimir as informações lidas.
    </p><br/>
	
    <?php
    
     $nome = $_GET["v1"];
     $idade = $_GET["v2"];
     $sexo = $_GET["v3"];

     echo "o seu nome:" . $nome .", a sua idade é: ".$idade . ", do sexo ". $sexo;

    /*<form action="foo.php" method="post">;
    Nome:  <input type="text" name="username" /><br />;
    Email: <input type="text" name="email" /><br />;
    <input type="submit" name="submit" value="Me aperte!" />;
    </form>*/
      
    ?>
    <br/>
    <br/>
    <a href="index.php"><h3>Voltar</h3></a>
</div>
</body>
</html>