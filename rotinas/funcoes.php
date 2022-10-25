<?php
//procedimentos em PHP
       
       function escreva_texto(){
           echo "<p style='text-align: center;'>Minha primeira função em PHP </p>";
          }
          function escreva_texto2($qualquer_coisa){
              echo "<p style='text-align: center;'>$qualquer_coisa </p>";
        
          }
          function hoje(){
              date_default_timezone_set("America/Sao_Paulo");
              $agora = date('d/m/Y H:i');
              echo "<p style='text-align: center;'>$agora </p>";
        
          }
          function pulaLinha($pulo){
              $i=1;
              do{
                  
                  echo "<br>";
                  $i++;
                }while ($i <= $pulo);
                
          }
          
          function soma($n1,$n2){
            $som = $n1 + $n2;
            echo "<h6 style='text-align: center;'>A operação é : $n1 + $n2 = $som</h6>";
        }
        function soma2(){
            $valores = func_get_args(); //pega os argumentos e devolve um array;
            $qtd1 = count($valores);
            $qd2 = func_num_args(); //retorna um inteiro que representa a quantidade de argumento = count
            $total = 0;
            echo "<h6 style='text-align: center;'>A operação é : ";
            for($i = 0; $i < $qtd1; $i++){
                $total += $valores[$i]; // $total = $total + $valores[i$]
                echo "$valores[$i]" . ($i < $qtd1 -1 ?" + " :" = ");
            }
            echo "$total </h6>";
        }
        function subtrai($n1, $n2){
            $dif = $n1 - $n2;
            echo "<h6 style='text-align: center;'>A operação é : $n1 - $n2 = $dif </h6>";
          }
          function multipli($n1, $n2){
            $mul = $n1 * $n2;
            echo "<h6 style='text-align: center;'>A operação é : $n1 * $n2 = $mul </h6>";
          }   
          function dividi($n1, $n2){
            $n2 == 0 ? $div = 0 : $div = $n1 / $n2;
            echo "<h6 style='text-align: center;'>A operação é : $n1 ÷ $n2 = " . ($n2 == 0 ? "operação inválida" : "$div") ."</h6>";
          }   
          