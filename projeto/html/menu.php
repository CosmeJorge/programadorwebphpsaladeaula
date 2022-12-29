<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
           
            <?php

            if(isset($_SESSION['tipo'])){
                echo '<li><a href="clientes.php">Clientes</a></li>';
            }elseif(isset($_SESSION['id'])) {
                echo '<li><a href="clienteConfig.php">Configuração</a></li>';
            }
            
            ?>
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
            <?php if(isset($_SESSION['nome'])){?>
                <!-- <li style="float: right;"><a href="clienteConfig.php"> -->
                <li style="float: right;"><a href=<?=isset($_SESSION['tipo']) ?"funcionarioConfig.php" : "clienteConfig.php" ?>>
                    BEM VINDO: <?= substr($_SESSION['nome'], 0, 
                    strpos($_SESSION['nome'], " ")); ?>
                </a></li>
            <?php } 
        
                if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =="Administrador"){
                        echo '<li><a href="funcionario.php">Funcionarios</a></li>';
                    }

                    ?>
        </ul>
    </nav>
    