<?php

//Conexão local
$hostname = "localhost";
$banco_de_dados = "projeto";
$usuario = "root";
$senha = "";
//Conexão infinity free
/*$hostname = "sql101.epizy.com";
$banco_de_dados = "epiz_33158090_projetoDB";
$usuario = "epiz_33158090";
$senha = "JUm8KRSgnmWXVvg";
//Conexão 000webhost
/*$hostname = "localhost";
$banco_de_dados = "id19904087_projetobd";
$usuario = "id19904087_desenvolvedor";
$senha = "~mc}{THO%jUg8PQt";*/

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}