<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	 require "html/head.php";
	 if(!isset($_SESSION)){
		session_start();
	 }
	 if($_SESSION['tipo'] == ''){header("Location: nao_permitido.php");}
	 $idlogado = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
	 $tipologado = isset($_SESSION["tipo"]) ? $_SESSION["tipo"] : '';
	 echo "Está logado o ID $idlogado com o tipo $tipologado";
	 ?>

    <script>
        		function confirma() {
			if (f.senha.value == "") {

				document.getElementById("divConfirma").style.display = 'none';
			} else {
				document.getElementById("divConfirma").style.display = 'block';
			}
		}

		function verifica() {

			if (f.senha.value == f.senha2.value) {
				document.getElementById("erro").style.display = 'none';
				document.getElementById("btn-off").style.display = 'none';
				document.getElementById("btn-on").style.display = 'block';
				<?php $res = false ?>
			} else {
				document.getElementById("erro").style.display = 'block';
				document.getElementById("btn-off").style.display = 'block';
				document.getElementById("btn-on").style.display = 'none';
                <?php $res = true ?>
			}
		}
        
        </script>
        
</head>

	<!--  -->
	<body>
		<?php 
        include "html/header.php"; 
        require_once "src/conexao.php";
        //require_once "src/model/Cliente.php";

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if( $id > 0){
			$sql_code = "SELECT * FROM funcionario WHERE idfuncionario = '$id'";
			$sql_query = $conexao->query($sql_code);

			if($sql_query->num_rows > 0){
				$funcionario = $sql_query->fetch_assoc();
			} else {
				header("Location: index.php");
			}

		} else {
			header("Location: index.php");
		}
      



		if(isset($_GET['gravado'])){
			
		$gravado = isset($_GET['gravado']) ? $_GET['gravado'] : 0;
		
        if($gravado > 0){

				echo '<!DOCTYPE html>';
				echo '<html lang="pt-br">';
				echo '<head>';
				echo '<meta http-equiv="refresh" content="5; url=cadastroFuncionario.php">';
				echo '</head>';
				echo '<body>';
				echo '<div style="width: 1024px; margin: auto;" class="alert alert-success" role="alert">
					Cadastro realizado com sucesso! <a style="text-decoration: none; float: right;" href="cadastroFuncionario.php" class="alert-link">x</a>
					<br>
				</div>';
				echo '</body>';
				echo '</html>';
			} else {
				echo '<!DOCTYPE html>';
				echo '<html lang="pt-br">';
				echo '<head>';
				echo '   <meta http-equiv="refresh" content="10; url=cadastroFuncionario.php">';
				echo '</head>';
				echo '<body>';
				echo '<div style="width: 1024px; margin: auto;" class="alert alert-danger" role="alert">
					Erro ao adicionado! <a style="text-decoration: none; float: right;" href="cadastroCliente.php" class="alert-link">x</a>
				</div>';
				echo '</body>';
				echo '</html>';
			}
        }
		
        ?>

	<main>
			

        <div class="container-fluid">
			<button class="btn btn-danger" style="float: right" onclick ='voltapagina()' >Voltar</button>
			<h1>Funcionarios</h1>
			<h3><?=($idlogado==$id) ? "Meu ": "Editando ";?>Cadastro</h3>
			
			<form class="row g-3 container-fluid" name="f" action="src/controler/funcionario_bd/editarFuncionario.php" method="post">

			<input type="text" class="form-control" id="id" name="idfuncionario" value="<?=$id?>" hidden>

				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome completo</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="<?=$funcionario['nome']?>" 
					<?=($idlogado==$id) ? "required": "disabled";?>>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="email_id" class="form-label">E-mail</label>
					<div class="input-group">
						<span class="input-group-text" id="inputGroupPrepend2">@</span>
						<input type="email" class="form-control" id="email_id" name="email" value="<?=$funcionario['email']?>" aria-describedby="inputGroupPrepend2" 
						<?=($idlogado==$id) ? "required": "disabled";?>>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="cpf_id" class="form-label">CPF</label>
					<input type="cpf" class="form-control" id="cpf_id" name="cpf" value="<?=$funcionario['cpf']?>" 
					<?=($idlogado==$id) ? "required": "disabled";?>>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="dtnasci" class="form-label">Data de nascimento</label>
					<input type="date" class="form-control" id="dtnasci" name="nascimento" value="<?=$funcionario['data_nascimento']?>" 
					<?=($idlogado==$id) ? "required": "disabled";?>>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="or_id" class="form-label">Celular</label>
					<input type="text" class="form-control" id="or_id" name="celular" value="<?=$funcionario['celular']?>" 
					<?=($idlogado==$id) ? "required": "disabled";?>>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="estadoc" class="form-label">Estado civil</label>
					<select class="form-select" id="estadoc" name="estado_civil" 
					<?=($idlogado==$id) ? "required": "disabled";?>>
					<option disabled value="">Selecione</option>
						<option value="Solteiro"
						<?php if($funcionario['estado_civil'] == "Solteiro"){echo "selected";}?>>Solterio(a)</option>
						<option value="Casado"
						<?php if($funcionario['estado_civil'] == "Casado"){echo "selected";}?>>Casado(a)</option>
						<option value="Divorciado"
						<?php if($funcionario['estado_civil'] == "Divorciado"){echo "selected";}?>>Divorciado(a)</option>
						<option value="Viuvo"
						<?php if($funcionario['estado_civil'] == "Viuvo"){echo "selected";}?>
						>Viuvo(a)</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="tipo_id" class="form-label">Tipo</label>
					<select class="form-select" id="tipo_id" name="tipo" 
					<?=($tipologado=="Administrador") ? "required": "disabled";?>>
					
						<option value="Administrador"
						<?php if($funcionario['tipo'] == "Administrador"){echo "selected";}?>>Administrador(a)</option>
						<option value="Vendedo"
						<?php if($funcionario['tipo'] == "Vendedor"){echo "selected";}?>>Vendedor(a)</option>
					</select>
				</div>
				<?php if($idlogado == $funcionario['idfuncionario']){?>
				<div class="col-md-6 col-sm-12">
					<label for="sen1" class="form-label">Senha</label>
					<input type="password" class="form-control" id="sen1" onblur="confirma()" name="senha" value="<?=$funcionario['nome']?>" required>
				</div>
				<div class="col-md-6 col-sm-12" id="divConfirma" style="display: none">
					<label for="sen2" class="form-label">Confirmação senha</label>
					<input type="password" class="form-control" id="sen2" onblur="verifica()" name="senha2" value="<?=$funcionario['nome']?>" required>
					<div id="erro" class="invalid-feedback" style="display: none">
						Senhas divergentes.
					</div>
				</div>
				<?php } ?>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-on" >Salvar</button>
					
				</div>
			</form>
			
		</div>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

<script>
	function voltapagina() {
    window.history.back();
}
</script>

</body>

</html>