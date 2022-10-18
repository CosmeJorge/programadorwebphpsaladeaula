<?php
       
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
          function p_linha($pulo){
              $i=1;
              do{
                  
                  echo "$i <br>";
                  $i++;
                }while ($i <= $pulo);
                
          }
          function soma($n1,$n2){
              $som = $n1 + $n2;
              $dif = $n1 - $n2;
              $mul = $n1 * $n2;
              $div = $n1 / $n2;
              $mod = $n1 % $n2;
              echo "<h6 style='text-align: center;'>os números são: $n1 e $n2 </h6>";
              echo "<p style='text-align: center;'>a soma dos números é $som </p>";
              echo "<p style='text-align: center;'>a subtração dos números é $dif </p>";
              echo "<p style='text-align: center;'>a multiplicação dos números é $mul </p>";
              echo "<p style='text-align: center;'>a divisão dos números é $div </p>";
              echo "<p style='text-align: center;'>o resto da divisão  é $mod </p>";
          }