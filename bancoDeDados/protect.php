<?php
if(!isset($_SESSION)){
session_start();
}

if(!isset($_SESSION['id'])){
    header('location: nao_permitido.php');
    /*die("Você não pode acessar esta página sem esta logado <br>
    <a href=\"index.php\" class=\"btn btn-link\">Voltar
        <i class=\"bi bi-reply\" style=\"font-size: 2rem;\"></i>
    </a>");*/
}