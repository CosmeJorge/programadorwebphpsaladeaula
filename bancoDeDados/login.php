<?php
<<<<<<< Updated upstream
require_once 'protect.php';
=======
// if(!isset($_SESSION)){
//     session_start();
// }

require_once 'protect.php';

>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../css/estilo.css" />
    <title>Senac - Curso de PHP</title>
    
=======
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
>>>>>>> Stashed changes
</head>

<body>
    <div>
    <?php 
    $idUsuario = $_SESSION["id"];
    $nomeUsuario = $_SESSION["nome"];

    echo "<br><h2 style='text-align: center;'>Bem vindo ao Sistema!<br>$nomeUsuario</h2>";

    ?>
    <a href="index.php" class="btn btn-link">
<<<<<<< Updated upstream
            <i class="bi bi-reply" style="font-size: 2rem;"></i>

        </a>
        <a href="logout.php" class="btn btn-link">
            <i class="bi bi-door-closed" style="font-size: 2rem;"></i>

        </a>
=======
        <i class="bi bi-reply" style="font-size: 2rem;"></i>
    </a>
    <a href="logout.php" class="btn btn-link">
        <i class="bi bi-door-closed" style="font-size: 2rem;"></i>
    </a>


>>>>>>> Stashed changes
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>