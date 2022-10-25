<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css" />
    <title>Senac - Curso de PHP</title>
    <script>
      function validar(){
          var msg = "";
          var flag = 0;
          if(f.nome.value == ""){
              flag = 1;
              msg = "Preencha o campo Nome de Usuário!";
          }
          if(f.senha01.value == ""){
              flag = 1;
              msg = msg + "<br>Preencha o campo Senha!";
          }
          if(f.senha02.value == ""){
              flag = 1;
              msg = msg + "<br>Preencha o campo Confirmação de Senha!";
          }
          if(f.senha02.value != f.senha01.value){
              flag = 1;
              msg = msg + "<br>As senhas digitadas não confre!";
          }
          if(flag == 0){
              document.getElementById("resposta").style.display = "none";
              return true;
          }else{
              document.getElementById("resposta").style.display = "block";
              document.getElementById("resposta").innerHTML = msg;
              return false;
              
          }
      }

       
    </script>
</head>

<body>
    <div>

        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Cadastro de Usuário</h4>
        <hr>

        <section id="resposta" class="alert alert-danger" role="alert" style="display: none;">
        </section>
        
        <form action="loginR.php" method="post" name="f" onsubmit="return validar()">
        <br>
        <label for="id" class="form-label">Nome de Usuário: </label>
        <input type="text" name="nome" class="form-control">
        
        <label for="id" class="form-label">Crie sua Senha: </label>
        <input type="password" name="senha01" class="form-control" placeholder="Somente números">
       
        <label for="id" class="form-label">Confirme sua Senha: </label>
        <input type="password" name="senha02" class="form-control">
        
        <br>

        <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>