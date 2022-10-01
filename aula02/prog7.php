<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - programação em PHP - Venda</title>
</head>
<body>
    <div>
    <h3>Lista de Produtos</h3>
    <form action="prog7r.php" method="post">
        Produto:<br>
        <input type="text" name="produt"><br>
        Valor:<br>
        <input type="number" name="valor" placeholder="Digite o valor unitário"><br>
        Quantidade:<br>
        <input type="number" name="qtd" min="1" placeholder="Digite a quantidade"><br>
        
        <br>
        <input type="submit" value="Salvar">
    </form>

    </div>
    
</body>
</html>