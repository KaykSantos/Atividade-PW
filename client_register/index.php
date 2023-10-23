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
</head>
<body>
    <a href="../home">Voltar</a> <br><br>
    <fieldset>
        <legend>Cadastro de cliente</legend>
        <form action="../php/client_register.php" method="post">
            <input type="text" name="name" id="name" placeholder="Nome:">
            <br><br>
            <input type="email" name="email" id="email" placeholder="Email:">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Senha:">
            <br><br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <fieldset>
        <?php
            
            $sql = "SELECT * FROM cliente";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                foreach($stmt as $row){
                    echo "Id: ".$row['id']."<br>Nome: ".$row['name']."<br>Email: ".$row['email']."<br><br>";
                }
            }else{
                echo "<h2>Não há clientes cadastrados</h2>";
            }
            
        ?>
    </fieldset>
</body>
</html>