<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    $linguagem="HTML, CSS e PHP";

    echo "<h1>Olá, meu primeiro programa em " .$linguagem ."</h1>";

    $linguagem="HTML, CSS e PHP";

    echo "Olá, meu primeiro programa em  $linguagem";


    printf("<br>Olá, meu primeiro programa em " .$linguagem);

    $numero01 = "2";
    $numero02 = "4";
    $resultou = $numero01 + $numero02;

    echo "<br><br> primeiro número $numero01";
    echo "<br> segundo número $numero02";

    echo "<br> Esta é a soma dos números $resultou";



    ?>
    
</body>
</html>