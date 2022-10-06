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
        <p>Escreva um número, de acordo com a sua escolha veja o resultado da operação aritimética.</p>
        <?php
        $n = $_POST["numero"];
        $o = $_POST["operacao"];
        switch($o){
            case 1:
                $resposta = $n * 2;
                break;
                case 2:
                $resposta = pow($n, 3);
                break;
                case 3:
                $resposta = sqrt($n) ;
                break;
        }

        echo "O resultado da operação solicitada foi: $resposta"
        
        ?>
            <br>
            <a href="exemploSwitch.html">Voltar
            <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>

</body>
</html>