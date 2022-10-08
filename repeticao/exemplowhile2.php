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
           Criando dinamicamente caixas de texto
        </p>
        <form action="exemplowhile2R.php" method="get">
            <?php
            $n =1;
            while($n <= 5){
            echo "
            <label for='id$n' class='form-label'>Label $n</label>
            <input type='number' class='form-control' name='v$n' id='id$n'>
             <br>";
             $n++;
            }       
        ?>
        <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
          <!--  <br>
            <a href="exemplowhileR.php"> 
            <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
            </a> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>

</body>
</html>