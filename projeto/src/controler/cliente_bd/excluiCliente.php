<?php

require_once "../../protect.php";
require_once "../../conexao.php";

$idCliente = isset($_GET['idcliente']) ? $_GET['idcliente'] : 0;

if($idCliente > 0){
   
   $sql_code = "DELETE FROM cliente WHERE idcliente = '$idCliente'";
   
    $sql_query = $conexao->query($sql_code);
    die("Cliente Excluido!");
    header("Location: ../../../clientes.php");

} else {
    header("Location: ../../../index.php");
}