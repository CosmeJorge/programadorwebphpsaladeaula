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
        <p style="text-align: center">
            Exercitando condicçoes de multiplos casos com swith.
        </p>
        <p>Escreva um número que represente o dia da semana.</p>
        <?php
        $n = $_POST["numero"];
        switch($n){
            case 1:
            case 7:
                echo"Dia de descanso";
                break;
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                 echo "dia de trabalhar e/ou estudar";
                break;
            default:
                echo "dia invalido";
        }

                
        ?>
            <br>
            <a href="exemploSwitch2.html"> 
            <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
            </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>

</body>
</html>