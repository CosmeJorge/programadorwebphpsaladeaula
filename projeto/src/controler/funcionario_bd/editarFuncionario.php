<?php 
    require_once "../../conexao.php";
    require_once "../../protect.php";
   
    $idfuncionario = isset($_POST["idfuncionario"]) ? $_POST["idfuncionario"] : 0;
    if($idfuncionario > 0){
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "";
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
        $estadoCivil = isset($_POST["estado_civil"]) ? $_POST["estado_civil"] : "";
        $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
        $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
        $ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

        $sql_code = "UPDATE funcionario  SET  nome='$nome', data_nascimento='$dataNascimento', cpf='$cpf', 'estado_civil=$estadoCivil', tipo='$tipo', celular='$celular', email='$email', senha='$senha' where idfuncionario='$idfuncionario'" ;
			
        $sql_query = $conexao->query($sql_code);

        echo '<div style="width: 1024px; margin: auto;" class="alert alert-success" role="alert">
					Atualização realizada com sucesso! <a style="text-decoration: none; float: right;" href="cadastroFuncionario.php" class="alert-link">x</a>
					<br>
				</div>';
			
			if($sql_query){
				$sql_code = "SELECT idfuncionario, nome FROM funcionario WHERE cpf = '$cpf'";
				$sql_query = $conexao->query($sql_code);

				$funcionario = $sql_query->fetch_assoc();

				$id = $funcionario['idfuncionario'];
				$nome = $funcionario['nome'];
				
                header("Location: /php/projeto/cadastroFuncionario.php?gravado=$id");
                die("Gravado!");

			} else {
                header("Location: /php/projeto/cadastroFuncionario.php?gravado=0");
            }

        }

        header("Location: /php/projeto/cadastroFuncionario.php");

        ?>