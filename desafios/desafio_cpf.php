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
              msg = "Preencha o campo Nome!";
          }
          if(f.cpf.value == ""){
              flag = 1;
              msg = msg + "<br>Preencha o campo CPF!";
          }
          if(f.email.value == ""){
              flag = 1;
              msg = msg + "<br>Preencha o campo E-mail!";
          }
          if(f.telefone.value == ""){
              flag = 1;
              msg = msg + "<br>Preencha o campo Telefone!";
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

       function mascara(i){
         //   console.log(i.value);
            var v = i.value;
            if(isNaN(v[v.length -1])){
                i.value = v.substring(0, v.lenght -1);
                return;
            }
            i.setAttribute("maxlength", 14);
            if(v.length == 3 || v.length == 7){i.value += ".";}
            if(v.length == 11){i.value += "-";}

        }

    </script>
</head>

<body>
    <div>

        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Cadastro de Aluno</h4>
        <hr>

        <section id="resposta" class="alert alert-danger" role="alert" style="display: none;">
        </section>
        
        <form action="desafio_cpf_R.php" method="post" name="f" onsubmit="return validar()">
        <br>
        <label for="id" class="form-label">Nome: </label>
        <input type="text" name="nome" class="form-control">
        
        <label for="id" class="form-label">CPF: </label>
        <input type="text" name="cpf" class="form-control" oninput="mascara(this)" placeholder="Somente números">
       
        <label for="id" class="form-label">E-mail: </label>
        <input type="email" name="email" class="form-control">

        <label for="id" class="form-label">Telefone: </label>
        <input type="text" name="telefone" class="form-control" placeholder = "incluindo o DDD">
        <br>

        <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>