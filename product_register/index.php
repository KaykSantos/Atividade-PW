<?php
    require '../php/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <a href="../home">Voltar</a> <br><br>
    <fieldset>
        <legend>Cadastro de produtos</legend>
        <form action="../php/product_register.php" method="post">
            <input type="text" name="name" id="name" placeholder="Nome do produto:">
            <br><br>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição do produto:"></textarea>
            <br><br>
            <input type="number" name="price" id="price" placeholder="Preço do produto:">
            <br><br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <fieldset>
        <?php
            
            $sql = "SELECT * FROM produto";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                foreach($stmt as $row){
                    echo "Id: ".$row['id']."<br>Nome: ".$row['name']."<br>Descrição: ".$row['description']."<br>Preço: ".$row['price']."<br><br>";
                }
            }else{
                echo "<h2>Não há clientes cadastrados</h2>";
            }
        ?>
    </fieldset>
</body>
</html>