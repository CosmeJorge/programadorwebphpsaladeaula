<?php

require_once "../../protect.php";
require_once "../../conexao.php";

if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){

$idCliente = isset($_GET['id']) ? $_GET['id'] : 0;
echo "cheguei no excluir. <br>Vou excluir o cliente $idCliente";


if($idCliente > 0){
   
   $sql_code = "DELETE FROM cliente WHERE idcliente = '$idCliente'";
   
    $sql_query = $conexao->query($sql_code);
    ("Cliente Excluido!");
    header("Location: ../../../clientes.php");

} else {
    header("Location: ../../../index.php");
}
} else {
    header("Location: ../../../nao_permitido.php");
    //die ("você não tem permissão para executar esta função");
}