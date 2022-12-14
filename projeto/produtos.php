<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<!--  -->
	<body>
		<?php 
		include "html/header.php";
		require_once "src/conexao.php";


		$sql_code = "SELECT * FROM produtos";
		$sql_query = $conexao->query($sql_code);

		if(!isset($_SESSION)){
			session_start();
		}
				?>
		<main>

		<?php
		if(isset($_SESSION['tipo'])){
			echo "<a href='cadastroProduto.php' class='col-6 btn-link' style='float: right';>
			<i class='bi bi-plus-circle' style='font-size: 2rem;'></i>
			<h6>Cadastrar</h6>
			</a>";
		}
		?>

			<h1>Produtos</h1>
			<h3>Lista cadstro</h3>;
			<table class="table table-bordered">
			<tr>
			<th>ID</th>
			<th>FOTO</th>
			<th>NOME</th>
			<th>TIPO</th>
			<th>CATEGORIA</th>
			<th>FABRICANTE</th>
			<th>ATIVO</th>
			<th>AÇÃO</th>
			</tr>
			<?php
			while ($produto = $sql_query->fetch_assoc()) {
			
			?>
			<tr>
			<td><?= $produto['idproduto']?></td>
			<td><img height='50' src ="<?= $produto['foto']?>"></td>
			<td><?= $produto['nome']?></td>
			<td><?= $produto['tipo']?></td>
			<td><?= $produto['categoria']?></td>
			<td><?= $produto['fabricante']?></td>
			<td><?= $produto['ativo']?></td>
			<td>
			<?php
			
			if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){
				$idproduto = $produto['idproduto'];
				echo "<a href='estoque.php?id=$idproduto;' style='text-decoration: none;' data-bs-toggle='tooltip' data-bs-placement='left' data-bs-title='Entrada no Estoque'>
				<i class='bi bi-clipboard-plus' style='font-size: 2rem;'> </i> 

				</a>";
			}
			
			?>

			<a href="mais_detalhes.php?id=<?= $produto['idproduto'];?>" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Detalhes">
            
			<!--[DETALHES]-->
			<i class="bi bi-clipboard-data" style="font-size: 2rem;"> </i> 
			</a>
			</td>
			</tr>
			<?php } ?>
			</table>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
		<script>
		const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

</body>

</html>