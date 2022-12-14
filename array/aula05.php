<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>



        <h1 style="text-align: center;">
            Arrays 05 - Funções.
        </h1>
        <hr>
        <br>
        <pre>
        <?php
       
       $a = array("A", "B", "C", "D", "E");
       print_r($a);
       $tamanho = count($a);
       echo "Tamanho do Array - count(array): " . $tamanho;
       echo "<br>";
       echo "colocar um novo elemento no final do array: array[] = 'dado'";
       $a[] = "F";
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       echo "colocar um novo elemento no final do array: array_push(array,'dado')";
       array_push($a, "G");
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       echo "Elimina o último elemento do array: array_pop(array)";
       array_pop($a);
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       echo "Remove uma posição do vetor: unset(array[posição])";
       unset($a[0]);
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       echo "Colocar um novo elemento no início do array: array_unshift(array,'dado')";
       array_unshift($a,"A");
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       echo "Remove o primeiro elemento do array: array_shift(array)";
       array_shift($a);
       print_r($a);
       echo "<br>";
       echo "---------------------------------";
       echo "<br>";
       
       echo "Ordenação: sort(array) = ordena os elementos do array";
       $b = array("E", "C", "D", "B", "A");
       echo "<br>";
       print_r($b);
       echo "sort() - ordena em ordem crescente.";
       sort($b);
       echo "<br>";
       print_r($b);
       echo "rsort() - ordena em ordem decrescente.";
       rsort($b);
       echo "<br>";
       print_r($b);
       echo "---------------------------------";
       echo "<br>";
       echo "ksort(array) = ordena os elementos do array, pelo índice 'key'";
       $c = array(4=>"A", 3=>"B", 2=>"C", 1=>"D", 0=>"E");
       echo "<br>";
       print_r($c);
       rsort($c);
       echo "<br>";
       print_r($c);
       echo "---------------------------------";
       echo "<br>";
       echo "var_dump (variável): mostra informações sobre a variável";
       var_dump($c);
       
       ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>