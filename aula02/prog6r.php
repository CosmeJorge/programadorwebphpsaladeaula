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
<p>Desvio condicional composto (DCC)

É quando uma pergunta tem duas ou mais possíveis respostas.

Escreva um programa que leia um número.
O programa deverá verificar se o número
é par ou impar.


    </p>
    <hr/>
    <h2 style="text-align: center">Entrada numérica</h2>
    <fieldset>
        <legend>Número a ser lido</legend>
    <?php
        $numero = $_GET["n"];
        
        if($numero > 0) {
           echo "<h1  style='text-align: center'>Núm. Positivo!</h1>";
         if($numero > 10) {
            echo "<h1 style='text-align: center'>Núm. Válido!</h1>";
        }} else if($numero < 0) {
            echo "<h1 style='text-align: center'>Núm. Negativo!</h1>";
        } else {
            echo "<h1 style='text-align: center'>Núm. Não Válido!</h1>";
        }
    

    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog6.html">Voltar</a>
    
</div>
</body>
</html>