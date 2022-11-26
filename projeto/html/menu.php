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
            <?php
            if(isset($_SESSION['nome'])){
                $varlocal = "Bem vindo " . $_SESSION['nome'];
                echo '<li style="float: right"><a href="clienteConfig.php">$varlocal</a></li>';
                
            }
            ?>

        </ul>
    </nav>
    