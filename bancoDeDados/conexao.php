<?php

$hostname = "localhost";
$banco_de_dados = "banco01";
$usuario = "root";
$senha = "";
<<<<<<< Updated upstream
$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){
    echo "Falha ao conectar: (" .$conexao->connect_errno . ")" . $conexao->connect_error;
} else{
    echo "Conectado ao Banco";
=======

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
>>>>>>> Stashed changes
}