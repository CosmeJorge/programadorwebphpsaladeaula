<?php
<<<<<<< Updated upstream
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
=======
echo "Testando as funções die() e exit() em php<br>";
// die("Aplicação interrompida nesse ponto, com a função die()!!!!");
// exit("Aplicação interrompida nesse ponto, com a função exit()!!!!");
echo "Linha exibida apenas se o script não for interrompido!<br>";
$senha = "123";
echo "Senha criptografada com MD5(): " . md5($senha);
echo "<br>Senha criptografada com password_hash(): " .
password_hash($senha, PASSWORD_DEFAULT);
$senhaCrip = '$2y$10$4hr8q2OmOvb8M9.2FJqJKuTiO9.l4K27VX9OZC.TNTRlsOn86dI5u';
if(password_verify($senha, $senhaCrip)){
    echo "<br>Senhas iguais!";
} else {
    echo "<br>Senhas diferentes!";
}
>>>>>>> Stashed changes
