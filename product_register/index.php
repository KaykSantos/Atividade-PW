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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <a href="../home" id="a-back">Voltar</a>
    <fieldset>
        <legend>Cadastro de produtos</legend>
        <form action="../php/product_register.php" method="post">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="price">Preço</label>
            <input type="number" name="price" id="price">
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <fieldset id="fieldset-info">
        <?php
            
            $sql = "SELECT * FROM produto";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                foreach($stmt as $row){
                    echo "<article class='info-user'>
                        <p class='row-info'>Id:".$row['id']."</p>
                        <p class='row-info'>Nome:".$row['name']."</p>
                        <p class='row-info'>Descrição:".$row['description']."</p>
                        <p class='row-info'>Preço:".$row['price']."</p>
                    </article>";
                }
            }else{
                echo "<h2 id='info-erro'>Não há produtos cadastrados</h2>";
            }
        ?>
    </fieldset>
</body>
</html>