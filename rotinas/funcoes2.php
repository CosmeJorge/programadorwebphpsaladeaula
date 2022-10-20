<?php
// Funçoes em PHP

function escreva_texto3($qualquer_coisa){
    /*$valret = "Agora este é seu texto";
    return $valret ;*/
    return $qualquer_coisa;
}
function p_linhar($pulo){
    $i=1;
    do{
        
        echo "$i <br>";
        $i++;
      }while ($i <= $pulo);
       $dureza = "100";
      return $dureza ; //"pulei ";// .($pulo <= 1 ? "1 linha" : "$i linhas");
      
    }