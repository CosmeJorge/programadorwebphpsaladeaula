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
    <p> Veja aqui as formas de pagamentos e valores a pagar. </p>

       <?php 
   $produt = $_POST["produt"];
   $valor = $_POST["valor"];
   $qtd = $_POST["qtd"];
   $v_vista = $valor * $qtd * .9;
   $v_total = $valor * $qtd * 1.15;
   $v_parcela = $v_total / 10;

   echo "<h3>Voce escolheu oproduto $produt</h3>";

   echo "O valor total da compra é: R$ ".$valor * $qtd;

   echo "<br> o valor a vista será: R$". $v_vista;
   ?>
   <br>
   <br>
   <a href="prog7.php"> <h3>Calcular</h3></a>
    </div>
</body>
</html>