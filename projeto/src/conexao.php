<?php

//Conexão local
/*$hostname = "localhost";
$banco_de_dados = "projeto";
$usuario = "root";
$senha = "";*/
//Conexão online
$hostname = "localhost";
$banco_de_dados = "id19904087_projetobd";
$usuario = "id19904087_desenvolvedor";
$senha = "~mc}{THO%jUg8PQt";

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}