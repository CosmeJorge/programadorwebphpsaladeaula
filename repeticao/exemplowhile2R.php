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
        
            <?php
            $i =1;
            while($i <= 5){
             
              $v = "num" . $i;
              $url = "v" . $i;
              $$v = $_GET["$url"];
              $i ++;
              
              
            }       
            //echo " do meste $num1 $num2 $num3 $num4 $num5 <br>";
            

            
           $i =1;
            while($i <= 5){
           
              $v = "num" . $i;
              echo "Valor $i: " . $$v . "<br>";
              $i ++;
              
            }    
        ?>

        
        
       
          <br>
            <a href="exemplowhile2.php"> 
            <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
            </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></>

</body>
</html>