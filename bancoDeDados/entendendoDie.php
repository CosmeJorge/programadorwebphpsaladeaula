<?php
echo "testando as funções die() e exit() em php";
//die("a aplicação é interrompida neste ponto die()");
//exit("a aplicação é interrompida neste ponto exit()");
echo "Linha exibida apenas se o script não for interrompido!";
$senha = "123";
echo "<br>senha criptografada com  MD5: " . md5($senha);
echo "<br>senha criptografada com  password_hash: " . password_hash($senha, PASSWORD_DEFAULT);
$senhacrip = '$2y$10$dKgi2/EZdgoC3c2jc3fM6ehghl/u51HGXdEt/qgjJ/Cu0D1.eDem6';

if(password_verify($senha, $senhacrip)){
    echo "<br>senhas iguais!";
} else{
    echo "<br>senhas diferentes!";
}