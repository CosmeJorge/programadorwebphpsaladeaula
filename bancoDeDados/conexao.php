<?php

$hostname = "localhost";
$banco_de_dados = "banco01";
$usuario = "root";
$senha = "";
$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){
    echo "Falha ao conectar: (" .$conexao->connect_errno . ")" . $conexao->connect_error;
} else{
    echo "Conectado ao Banco";
}