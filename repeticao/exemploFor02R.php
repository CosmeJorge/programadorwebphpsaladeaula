<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
        <h2 style="text-align: center">
            Desafio.
        </h2>
        <p>Escreva um número, para verificar se o mesmo é um número Primo.
                <br>Os Números Primos são números naturais maiores do que 1 que
                possuem somente dois divisores, ou seja, são divisíveis por
                1 e por ele mesmo.
            </p>
        <?php
        $qtda = 0;
        $num = $_POST["numero"];
        $divisor = "";
        
        
        echo "<h2>O número digitado foi : $num </h2><br>";
        

        for($n = 1; $n <= $num; $n++){
            if(($num % $n) == 0){
                $divisor = $divisor . " " .$n ;
                $qtda ++;
               
            }
        }
        /*if($qtda <= 2){
            echo "Este é um número primo <br>";
        }else{
            echo "Este número não é primo <br>";
        }*/

        /* As duas linhas comentadas podem ser substituidas pela linha seguinte */
        echo "Este número " . (($qtda > 2) ? "Não " : "") . "é Primo <br>";

      
        echo "O total de multiplos é: $qtda <br>";
        echo "Ele é divisível por: <br>";
        echo "$divisor";
          

        ?>
            <br>
            <a href="exemploFor02.html"> 
            <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
            </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>

</body>
</html>