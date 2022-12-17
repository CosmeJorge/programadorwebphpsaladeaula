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
        include_once "src/model/produto.php";
        include_once "src/model/estoque.php";

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if( $id > 0){
			$sql_code = "SELECT * FROM produtos JOIN estoque WHERE idproduto = '$id'";
			$sql_query = $conexao->query($sql_code);

			if($sql_query->num_rows > 0){
                $produto = $sql_query->fetch_assoc();
                $objproduto = new produto(
                    $estoque['idproduto'],
                    $estoque['nome'],
                    $estoque['tipo'],
                    $estoque['categoria'],
                    $estoque['fabricante'],
                    $estoque['descricao'],
                    $estoque['foto'],
                    $estoque['ativo']
                );
                if(isset($estoque['idestoque'])){
                    $objestoque = new estoque(
                        $estoque['idestoque'],
                        $objproduto,
                        $estoque['qtd'],
                        $estoque['registro'],
                        $estoque['data_registro'],
                        $estoque['valor_compra'],
                        $estoque['valor_venda']
                        
                    );
                } else{
                        $objestoque = new estoque(
                            0,
                            $objproduto,
                            0,
                            '---',
                            '//',
                            0.0,
                            0.0
                        );

                }
                
			} else {
				/*header("Location: produtos.php");*/
			}

		} else {
			header("Location: index.php");
		}?>        

		<main>
		<h1>Detalhes do produto</h1>
        <div class="card">
            <img src="<?=$produto['foto'];?>" style="width: 20rem; margin: auto" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">TIPO: <?=$produto['tipo'];?></li>
                <li class="list-group-item">CATEGORIA: <?=$produto['categoria'];?></li>
                <li class="list-group-item">EM ESTOQUE: <?=$produto['qtd'];?></li>
                <li class="list-group-item">Valor: R$ <?=$produto['valor_venda'];?></li>
                <li class="list-group-item">Descrição: <?=$produto['descricao'];?></li>
            </ul>
            <div class="card-body">
                <a href="index.php" class="card-link">Home</a>
                <a href="produtos.php" class="card-link">Lista de Produtos</a>

                <a href="?<?='id' . $id ."&adicionar=" . $objestoque->getIdEstoque()?>" 
                <?= (!isse($estoque['qtd']) || $estoque['qtd'] < 1) ? 'hidden' : ''?> class="card-link">Adicionar ao Carrinho</a>

            </div>
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