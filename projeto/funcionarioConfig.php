<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	 require "html/head.php";
	 if(!isset($_SESSION)){
		session_start();
	 }
	 ?>

        
</head>

	<!--  -->
	<body>
		<?php 
        include "html/header.php"; 
        require_once "src/protect.php";
        require_once "src/conexao.php";
        require_once "src/model/Cliente.php";
		
		$id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
		
		
        ?>

		<main>
		<h4 style="text-align: center">Área do Funcionário - Edição de Dados</h4>
        <div class = "row row-cols-1 row-cols-md-2 g-4" >
		
			<a href="edicaoFuncionario.php?id=<?=$id?>">
			<div class="col" >
				<div class="card" >
					<i class="bi bi-person-square text-center text-success" style="font-size: 10rem;"></i>
					<div class="card-body">
						<h5 class="card-title text-center">Meus Dados</h5>
					</div>
				</div>
			</div>
			</a>
			
			<a href="<?=(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador")
			? 'cadastroFuncionario.php' :'#'?>">
			
			<div class="col" >
				<div class="card" >
					<i class="bi-folder-plus text-center " style="font-size: 10rem;"></i>
					<div class="card-body">
						<h5 class="card-title text-center">Cadastro de Funcionários</h5>
					</div>
				</div>
			</div>
			</a>


			</div>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>