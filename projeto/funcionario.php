<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>
</head>

	<!--  -->
	<body>
        <?php 
        require_once "src/protect.php";
        if(!isset($_SESSION['tipo'])){ header("Location: nao_permitido.php");}
        include "html/header.php"; 
        require_once "src/conexao.php";


        $lista = [];
        $sql_code = "SELECT * FROM funcionario";
        $sql_query = $conexao->query($sql_code);
        
        if($sql_query->num_rows > 0){
            $lista = $sql_query->fetch_all(MYSQLI_ASSOC);
           
        }

        if(!isset($_SESSION)){
            session_start();
        }
    
        $id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
        $nome = isset($_SESSION["nome"]) ? $_SESSION["nome"] : "";

        ?>

        <main>
			<h1>Funcionários</h1>
            <h3>Lista de cadastrados</h3>
            <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <!--<th>ID</th>-->
                    <th>NOME</th>
                    <th>NASCIMENTO</th>
                    <th>CPF</th>
                    <th>ESTADO CIVIL</th>
                    <?php
                    if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){ 
                    ?>
                    <th>TIPO</th>
                    <th>ATIVO</th>
                    <?php }?>
                    <th>CELULAR</th>
                    <th>EMAIL</th>
                    <th>AÇÃO</th>
                    <th>IDENTIDADE</th>
                    <th>ORGÃO</th>
                    <th>SEXO</th>
                </tr>
                <?php foreach($lista as $funcionario) : ?>
                <tr>

                    <td><?=$funcionario["nome"]; ?></td>
                    <td><?=$funcionario["data_nascimento"]; ?></td>
                    <td><?=$funcionario["cpf"]; ?></td>
                    <td><?=$funcionario["estado_civil"]; ?></td>
                    <?php
                    if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){ 
                    ?>
                    <td><?=$funcionario["tipo"]; ?></td>
                    <td><?=$funcionario["ativo"]; ?></td>
                    <?php }?>
                    <td><?=$funcionario["celular"]; ?></td>
                    <td><?=$funcionario["email"]; ?></td>
                    
                    <td>
                        <a href="edicaofuncionario.php?id=<?=$funcionario['idfuncionario']; ?>"><!--[EDITAR]-->
                        <i class="bi bi-pencil-square" style="font-size: 2rem;"></i></a>
                        <?php
			            if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){ 
                        ?>

                           <a href="#" onclick="confirmarApagar(<?=$funcionario['idfuncionario']; ?>)">
                           <i class="bi bi-trash" style="font-size: 2rem; color: red;"></i></a>
                        <?php }?>
                    </td>
                   <?php endforeach ?> 
                </tr>
            </table>
            </div>
		</main>



<?php
	include "html/rodaPe.php";
?>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
        <script src="src/js/confirmacao.js"> </script>

</body>

</html>