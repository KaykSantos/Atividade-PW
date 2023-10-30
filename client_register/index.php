<?php
    require '../php/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <a href="../home" id="a-back">Voltar</a>
    <fieldset>
        <legend>Cadastro de cliente</legend>
        <form action="../php/client_register.php" method="post">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <fieldset id="fieldset-info">
        <?php
            
            $sql = "SELECT * FROM cliente";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                foreach($stmt as $row){
                    echo "<article class='info-user'>
                        <p class='row-info'>Id:".$row['id']."</p>
                        <p class='row-info'>Nome:".$row['name']."</p>
                        <p class='row-info'>Email:".$row['email']."</p>
                        
                    </article>";
                }
            }else{
                echo "<h2 id='info-erro'>Não há clientes cadastrados ainda</h2>";
            }
            
        ?>
    </fieldset>
</body>
</html>